<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Models\Center;
use Illuminate\Http\Request;

class CenterController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $datas=Center::latest('id')->limit(1)->get();
        $medias=Media::all();
        return view('static.center')->with(['datas'=>$datas,'medias'=>$medias]);
    }
}