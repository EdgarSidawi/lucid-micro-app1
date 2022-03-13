<?php

namespace App\Domains\Sport\Jobs;

use App\Data\Models\Sport;
use Lucid\Units\Job;

class SaveSportJob extends Job
{
    private string $name;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $attributes = [
            'name' => $this->name
        ];

        return tap(new Sport($attributes))->save();
    }
}
