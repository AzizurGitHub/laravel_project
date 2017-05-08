<?php

namespace App\Http\Controllers;


use App\BlogModel;
use Illuminate\Http\Request;

class BlogPost extends Controller
{

    /**
     * @param Request $request
     */
    public function store(Request $request)
   {
       $insert_post = new BlogModel();

       $insert_post->post_title = $request->name;
       $insert_post->post = $request->post;

       $insert_post->save();

   }
}