<?php

namespace App\Features;

use App\Domains\Http\Jobs\RedirectBackJob;
use App\Domains\Sport\Jobs\SaveSportJob;
use App\Domains\Sport\Requests\AddSport;
use Illuminate\Http\Request;
use Lucid\Units\Feature;

class AddSportFeature extends Feature
{
    public function handle(AddSport $request)
    {
        $this->run(SaveSportJob::class, [
            'name' => $request->input('name')
        ]);

        return $this->run(RedirectBackJob::class);
    }
}
