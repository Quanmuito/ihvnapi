<?php

namespace App\Http\Controllers\Hero;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Model\Fivestar;
use App\Http\Resources\Fivestar as FivestarResource;

class FivestarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function shadow()
    {
        $heroes = Fivestar::where('faction', 'shadow')->get();

        // Return as resource
        return FivestarResource::collection($heroes);
    }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show($id)
    // {
    //     // Get 1 article
    //     $hero = Fivestar::findOrFail($id);

    //     // Return as a resource
    //     return new FivestarResource($hero);
    // }
}
