<?php

namespace App\Http\Controllers\Hero;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Model\Fivestar;
use App\Model\Sixstar;
use App\Model\Tenstar;
use App\Http\Resources\Fivestar as FivestarResource;

class HeroesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get all heroes
        $hero_5 = Fivestar::all();
        $hero_6 = Sixstar::all();
        $hero_10 = Tenstar::all();
        $heroes = [$hero_5, $hero_6, $hero_10];

        // Return as resource
        // return FivestarResource::collection($heroes);
        return view('heroes.index')->with('heroes', $heroes);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('heroes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($name)
    {
        $hero_5 = Fivestar::where('name', $name)->get();
        $hero_6 = Sixstar::where('name', $name)->get();
        $hero_10 = Tenstar::where('name', $name)->get();
        $heroes = [$hero_5, $hero_6, $hero_10];
        return view('heroes.show')->with('heroes', $heroes);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('heroes.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
