<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $datas=Experience::latest('id')->limit(1)->get();
        $medias=Media::all();
        return view('static.experience')->with(['datas'=>$datas,'medias'=>$medias]);
    }
}