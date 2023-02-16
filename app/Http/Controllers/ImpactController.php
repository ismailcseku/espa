<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Models\Impact;
use Illuminate\Http\Request;

class ImpactController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $datas=Impact::latest('id')->limit(1)->get();
        $medias=Media::all();
        return view('static.impact')->with(['datas'=>$datas,'medias'=>$medias]);
    }
}