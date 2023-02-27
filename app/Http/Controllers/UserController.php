<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{



    public function getAllBlogs(){

        $blogs = DB::select('select * from blogs');

        return view('blogmodule::layouts.homeblogforadmin')->with('blogs',$blogs);
    }

    


    
    
    
    
}
