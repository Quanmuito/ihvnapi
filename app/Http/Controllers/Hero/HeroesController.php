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
        $this->validate($request, [
            'faction' => 'required',
            'name' => 'required',
            'class' => 'required',
            'skill1' => 'required',
            'skill2' => 'required',
            'skill3' => 'required',
            'skill4' => 'required',
            'hp' => 'required',
            'atk' => 'required',
            'armor' => 'required',
            'speed' => 'required',
            'heal' => 'required',
            'img' => 'image|nullable|max:1999',
            'avatar' => 'image|nullable|max:1999',
        ]);

        //Handle Hero Image Upload
        if($request->hasFile('img')){
            // Get filename with the extension
            $filenameWithExt = $request->file('img')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('img')->getClientOriginalExtension();
            // Filename to store
            $img_fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('img')->storeAs('public/hero_images', $img_fileNameToStore);
		
        } else {
            $img_fileNameToStore = 'dummy_image.jpg';
        }

        //Handle Hero Avatar Upload
        if($request->hasFile('avatar')){
            // Get filename with the extension
            $filenameWithExt = $request->file('avatar')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('avatar')->getClientOriginalExtension();
            // Filename to store
            $avatar_fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('avatar')->storeAs('public/avatar_images', $avatar_fileNameToStore);
		
        } else {
            $avatar_fileNameToStore = 'dummy_avatar.jpg';
        }

        // Save to database

        // Find whether 5 6 10 stars hero
        switch($request->input('stars')) {
            case 5:
                $hero = new Fivestar;
            break;
            case 6:
                $hero = new Sixstar;
            break;
            case 10:
                $hero = new Tenstar;
            break;
        }

        $hero->user_id = auth()->user()->id;
        $hero->faction = $request->input('faction');
        $hero->name = $request->input('name');
        $hero->class = $request->input('class');
        $hero->skill1 = $request->input('skill1');
        $hero->skill2 = $request->input('skill2');
        $hero->skill3 = $request->input('skill3');
        $hero->skill4 = $request->input('skill4');
        $hero->hp = $request->input('hp');
        $hero->atk = $request->input('atk');
        $hero->armor = $request->input('armor');
        $hero->speed = $request->input('speed');
        $hero->aoe = $request->input('aoe');
        $hero->cc = $request->input('cc');
        $hero->heal = $request->input('heal');
        $hero->img = $img_fileNameToStore;
        $hero->avatar = $avatar_fileNameToStore;
        $hero->save();

        return $hero;
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
    public function edit($star, $name)
    {
        switch($star) {
            case "5":
                $hero = Fivestar::where('name', $name)->get();
            break;
            case "6":
                $hero = Sixstar::where('name', $name)->get();
            break;
            case "10":
                $hero = Tenstar::where('name', $name)->get();
            break;            
        }

        // Check for correct user
        if(strval(auth()->user()->id) !== $hero[0]->user_id){
            return redirect('/heroes')->with('error', 'You are not allow to edit this page');
        }
        
        return view('heroes.edit')->with('hero', $hero);
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
