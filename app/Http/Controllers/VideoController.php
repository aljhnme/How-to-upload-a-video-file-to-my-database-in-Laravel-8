<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\video;

class VideoController extends Controller
{
    function index()
    {
        return view("index");
    }


    function fetch()
    {
      $data=video::all()->toArray();
      return view('videos',compact('data'));
    }

    function insert(Request $request)
    {
       $request->validate([
           'video' => 'required|mimes:mp4,ogx,oga,ogv,ogg,webm'
       ]);

       $file=$request->file('video');
       $file->move('upload',$file->getClientOriginalName());
       $file_name=$file->getClientOriginalName();

       $insert=new video();
       $insert->video = $file_name;
       $insert->save();

       return redirect('/fetch_video');
    }
 }
