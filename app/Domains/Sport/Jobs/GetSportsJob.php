<?php

namespace App\Domains\Sport\Jobs;

use App\Data\Models\Sport;
use Lucid\Units\Job;

class GetSportsJob extends Job
{
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        return Sport::all();
    }
}
