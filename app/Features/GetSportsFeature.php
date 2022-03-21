<?php

namespace App\Features;

use App\Domains\Sport\Jobs\GetSportsJob;
use Illuminate\Http\Request;
use Lucid\Units\Feature;

class GetSportsFeature extends Feature
{
    public function handle(Request $request)
    {
        $sports = $this->run(GetSportsJob::class);

        return view('welcome', ['data' => $sports]);
    }
}
