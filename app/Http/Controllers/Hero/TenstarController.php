<?php

namespace App\Http\Controllers\Hero;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Model\Tenstar;
use App\Http\Resources\Tenstar as TenstarResource;

class TenstarController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $heroes = Tenstar::all();

        // Return as resource
        return TenstarResource::collection($heroes);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function shadow()
    {
        $heroes = Tenstar::where('faction', 'shadow')->get();

        // Return as resource
        return TenstarResource::collection($heroes);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fortress()
    {
        $heroes = Tenstar::where('faction', 'fortress')->get();

        // Return as resource
        return TenstarResource::collection($heroes);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function albyss()
    {
        $heroes = Tenstar::where('faction', 'albyss')->get();

        // Return as resource
        return TenstarResource::collection($heroes);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function forest()
    {
        $heroes = Tenstar::where('faction', 'forest')->get();

        // Return as resource
        return TenstarResource::collection($heroes);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function light()
    {
        $heroes = Tenstar::where('faction', 'light')->get();

        // Return as resource
        return TenstarResource::collection($heroes);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dark()
    {
        $heroes = Tenstar::where('faction', 'dark')->get();

        // Return as resource
        return TenstarResource::collection($heroes);
    }
}
