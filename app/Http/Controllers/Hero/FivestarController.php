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
    public function index()
    {
        $heroes = Fivestar::all();

        // Return as resource
        return FivestarResource::collection($heroes);
    }

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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fortress()
    {
        $heroes = Fivestar::where('faction', 'fortress')->get();

        // Return as resource
        return FivestarResource::collection($heroes);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function albyss()
    {
        $heroes = Fivestar::where('faction', 'albyss')->get();

        // Return as resource
        return FivestarResource::collection($heroes);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function forest()
    {
        $heroes = Fivestar::where('faction', 'forest')->get();

        // Return as resource
        return FivestarResource::collection($heroes);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function light()
    {
        $heroes = Fivestar::where('faction', 'light')->get();

        // Return as resource
        return FivestarResource::collection($heroes);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dark()
    {
        $heroes = Fivestar::where('faction', 'dark')->get();

        // Return as resource
        return FivestarResource::collection($heroes);
    }
}
