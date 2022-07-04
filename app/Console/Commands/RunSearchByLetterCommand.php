<?php

namespace App\Console\Commands;

use App\Jobs\SearchByLetterJob;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class RunSearchByLetterCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'searchByLetter:run';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'dispatch searchByLetterJob';

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

        // check if status is on
        if (!DB::table('settings')->where('key','=','random_status')->first()->value) {
            $this->line('Off');
            return Command::FAILURE;
        }

        // if jobs table contain more than 200 job it will fail because of managing job number.
        if(DB::table('jobs')->count() > 200){
            $this->line('Jobs is so higher than 200');
            return Command::FAILURE;
        }

        SearchByLetterJob::dispatch()->onQueue('high');
        return Command::SUCCESS;
    }
}
