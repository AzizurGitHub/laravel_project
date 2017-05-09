<?php

namespace App\Http\Controllers;

use Illuminate\Http\UploadedFile;
//use Intervention\Image\Facades\Image;
use App\BlogModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogPost extends Controller
{

    public function index()
    {
        $posts= BlogModel::all();
        //dd(compact('post'));
        return view('post',compact('posts'));
    }
    
    
    /**
     * @param Request $request
     */
    public function store(Request $request)
   {

//
       $insert_post = new BlogModel();
//
        $insert_post->post_title = $request->name;
        $insert_post->post = $request->post;
        if($request->hasFile('image')){
//            $path=$request->file('image');
//           $pathe=$path->getClientOriginalName();
           $insert_post->image=$request->image->store('images');


//
        }
//

        $insert_post->save();


        return redirect('../post');

//
//
//          $path=$request->file('image');
//        $filename=$path->getClientOriginalName();
        //  $path = $request->file('image')->store('images');
//return $request->image->storeAs('public/new','demo.jpg');
//
//        $path = Storage::putFile('images', $request->file('image'));
//        $insert_post=$request->all();

//        $file=$request->file('image');
//            $filename=$file->getClientOriginalName();
//            Storage::move();
////            $file->('images/',$filename);
//            $insert_post['image']=$filename;

//      $filename= $request->file('image');
//
//      echo "<br>";
//      echo $filename->getClientOriginalName();
//      echo $filename->getClientSize();


//
//
//
//

//       $insert_post->save();

   }

    public function show()
    {

//       if(Storage::deleteDirectory('images')){
//           return "file deleted";
//       }
    }
}