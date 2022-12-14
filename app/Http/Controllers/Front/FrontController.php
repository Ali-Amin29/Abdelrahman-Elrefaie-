<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class FrontController extends Controller
{


     public function index()
     {
          $blog=Blog::get();
          
          return view('welcome',compact('blog'));

     }

     public function Blog()
     {
          $blogs=Blog::get();
          
          return view('Front.blog.blog',compact('blogs'));
     }

     public function show_blog($id)
     {
         $blog=Blog::find($id);
         return view('Front.blog.blog-single',compact('blog'));
     }


}