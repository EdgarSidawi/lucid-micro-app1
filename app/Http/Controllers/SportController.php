<?php

namespace App\Http\Controllers;

use App\Data\Models\Sport;
use App\Features\AddSportFeature;
use App\Features\GetSportsFeature;
use Lucid\Units\Controller;

class SportController extends Controller
{
    public function index()
    {
        return $this->serve(GetSportsFeature::class);
        // $sport = Sport::all();
        // return view('welcome', ['data' => $sport]);
    }

    public function add()
    {
        return $this->serve(AddSportFeature::class);
    }
}
