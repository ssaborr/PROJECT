<?php

namespace App\Http\Controllers;

use App\Models\video;
use Illuminate\Http\Request;
use App\Models\commentaire;
use App\Models\User;
use Illuminate\Facades\Schema\DB;
class videoscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $video=video::latest()->paginate(5);
      
        return view('programs',compact('video'))->with('i',(request()->input('page',1)-1)*10);
    }

    /**
     * Show the form for creating a new resource.
     */
   
    /**
     * Display the specified resource.
     */
    public function show(video $video)
    {
       $a = $video->id;
        $comments=commentaire::where('video_id','=',$a)->get();
        $altvideo = Video::where('id', '!=', $a)->inRandomOrder()->limit(6)->get();

        return view('showvideo',compact('video'))->with('altvideo',$altvideo)->with('comments',$comments);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(video $video)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, video $video)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(video $video)
    {
        //
    }
}
