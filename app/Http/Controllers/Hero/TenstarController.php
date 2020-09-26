<?php

namespace App\Http\Controllers\Hero;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function void()
    {
        $heroes = Tenstar::where('faction', 'void')->get();

        // Return as resource
        return TenstarResource::collection($heroes);
    }

    /**
     * Delete content of the whole table.
     *
     * @return \Illuminate\Http\Response
     */
    public function delete()
    {
        $heroes = Tenstar::all();
        for($i=0;$i<count($heroes);$i++)
        {
            if($heroes[$i]->img !== "dummy_image.jpg")
            {
                Storage::delete('public/hero_images/'.$heroes[$i]->img);
            }
            if($heroes[$i]->avatar !== "dummy_avatar.png")
            {
                Storage::delete('public/avatar_images/'.$heroes[$i]->avatar);
            }
        }
        DB::table('tenstars')->truncate();
        return redirect('/home')->with('success', '10 stars heroes data deleted');
    }
}
