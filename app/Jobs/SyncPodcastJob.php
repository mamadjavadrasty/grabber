<?php

namespace App\Jobs;

use App\Models\SyncPodcast;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SyncPodcastJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $syncPodcasts = SyncPodcast::all();

        if (!empty($syncPodcasts)) {
            foreach ($syncPodcasts as $syncPodcast) {
                RequestCreateData::dispatch($syncPodcast->collection_id)->onQueue('high');
            }
        }
    }
}
