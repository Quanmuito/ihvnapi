<?php

namespace App\Http\Controllers\Hero;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Model\Sixstar;
use App\Http\Resources\Sixstar as SixstarResource;

class SixstarController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $heroes = Sixstar::all();

        // Return as resource
        return SixstarResource::collection($heroes);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function shadow()
    {
        $heroes = Sixstar::where('faction', 'shadow')->get();

        // Return as resource
        return SixstarResource::collection($heroes);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fortress()
    {
        $heroes = Sixstar::where('faction', 'fortress')->get();

        // Return as resource
        return SixstarResource::collection($heroes);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function albyss()
    {
        $heroes = Sixstar::where('faction', 'albyss')->get();

        // Return as resource
        return SixstarResource::collection($heroes);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function forest()
    {
        $heroes = Sixstar::where('faction', 'forest')->get();

        // Return as resource
        return SixstarResource::collection($heroes);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function light()
    {
        $heroes = Sixstar::where('faction', 'light')->get();

        // Return as resource
        return SixstarResource::collection($heroes);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dark()
    {
        $heroes = Sixstar::where('faction', 'dark')->get();

        // Return as resource
        return SixstarResource::collection($heroes);
    }
}
