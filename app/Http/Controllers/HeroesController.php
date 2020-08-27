<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Hero;
use App\Http\Resources\Hero as HeroResource;

class HeroesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function shadow()
    {
        // Get infos from database and return as Resource.
        // return "Hello from Shadow function";
        $heroes = Hero::all();
        return HeroResource::collection($heroes);
    }
}
