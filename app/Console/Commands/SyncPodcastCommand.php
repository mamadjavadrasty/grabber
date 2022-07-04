<?php

namespace App\Console\Commands;

use App\Jobs\SyncPodcastJob;
use Illuminate\Console\Command;

class SyncPodcastCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dispatch:sync';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'just dispatch SyncPodcastJob queue.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        if(!SyncPodcastJob::dispatch()->onQueue('high')){
            $this->error('Something went wrong!');
            return Command::FAILURE;
        }
        $this->line('ok');
        return Command::SUCCESS;
    }
}
