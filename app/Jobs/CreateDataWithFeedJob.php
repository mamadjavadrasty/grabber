<?php

namespace App\Jobs;

use App\Models\Category;
use App\Models\PodcastCategory;
use App\Service\CategoryService;
use App\Service\EpisodeService;
use App\Service\FeedToArrayService;
use App\Service\PodcastService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;


class CreateDataWithFeedJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;



    /**
     * Create a new job instance.
     *
     * @return void
     */

    protected $feedUrl;
    protected $podcasterId;
    public function __construct($feedUrl,$podcasterId)
    {
        $this->feedUrl = $feedUrl;
        $this->podcasterId = $podcasterId;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(PodcastService $podcastService,EpisodeService $episodeService,FeedToArrayService $feedToArrayService)
    {

        $podcasts = $feedToArrayService->feedToArray($this->feedUrl);

        // check if data has any issue
        if (is_null($podcasts)) {
            $this->fail('response is null');
        }

        //podcast
        $podcast = $podcastService->updateOrCreate($podcasts[0],$this->podcasterId);

        //episode
        $episodeService->updateOrCreate($podcasts,$podcast->id,$this->podcasterId);

        //category
        $category_names = json_decode($podcasts[0]['genres']);

        foreach ($category_names as $category_name){
           $category = Category::updateOrCreate(
               ['name'=>$category_name],
               [
                'genre_id'=>null,
                'name'=>$category_name,
                 'uuid'=>Str::uuid()->toString(),
            ]);
            PodcastCategory::updateOrCreate(['podcast_id'=>$podcast->id ,'category_id' => $category->id]);
        }

    }


}
