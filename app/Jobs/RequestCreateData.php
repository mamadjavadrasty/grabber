<?php

namespace App\Jobs;

use App\Models\Podcaster;
use App\Service\CategoryService;
use Illuminate\Bus\Queueable;
use App\Service\EpisodeService;
use App\Service\PodcasterService;
use App\Service\PodcastService;
use Illuminate\Support\Facades\Http;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class RequestCreateData implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $tries = 1;

    /**
     * Create a new job instance.
     *
     * @return void
     */

    protected $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(PodcasterService $podcasterService,PodcastService $podcastService,EpisodeService $episodeService ,CategoryService $categoryService)
    {

        sleep(6); // Delay for apple itunes api limit

        $mainRequest = Http::get('https://itunes.apple.com/lookup?',[
            'id'=>$this->id,
            'entity'=>'podcastEpisode',
            'limit'=>200
        ]);
        $main = json_decode($mainRequest->body(),true);

        // check if data has any issue
        if (is_null($main)) {
            $this->fail('response is null' . $mainRequest->status() . $mainRequest);
        }

        if (!$main['resultCount'] >= 1) {
            $this->fail('result is null' . $mainRequest->status() . $mainRequest );
        }

        // get podcaster
        if (isset($main['results'][0]['artistId'])) {

            $podcasterRequest = Http::get('https://itunes.apple.com/lookup?',[
                'id'=> isset($main['results'][0]['artistId']) ? $main['results'][0]['artistId'] : null,
            ]);
            $podcasterResult  = json_decode(($podcasterRequest->body()),true);
            $podcaster = $podcasterService->updateOrCreate($podcasterResult);

        }else{
            $podcaster = $podcasterService->updateOrCreateWithoutArtistId(isset($main['results'][0]['artistName']) ? $main['results'][0]['artistName'] : null);
        }

        // podcast
        $podcastResult = $main['results'][0];
        $podcast = $podcastService->updateOrCreate($podcastResult,$podcaster == false ? null : $podcaster->id);
        sleep(10);

        $podcaster->update([
            'artwork_url30'=>$podcast->artwork_url30,
            'artwork_url60'=>$podcast->artwork_url60,
            'artwork_url100'=>$podcast->artwork_url100,
            'artwork_url_600'=>$podcast->artwork_url_600,
        ]);

        // episodes

        $episodes = $main['results'];
        $episodeService->updateOrCreate($episodes,$podcast->id,$podcaster == false ? null : $podcaster->id);

        // category
        $categoryService->updateOrCreate($podcast);

    }
}
