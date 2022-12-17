<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Team;
use App\Models\Video;
use App\Models\User;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $blog=Blog::count();
     $team=Team::count();
     $video=Video::count();
     $user=User::count();
    
    
     return view('Dashbord.index',compact('blog','team','video','user'));
    }

}