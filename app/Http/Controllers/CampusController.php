<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Models\Campus;
use Illuminate\Http\Request;

class CampusController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $datas=Campus::latest('id')->limit(1)->get();
        $medias=Media::all();
        return view('static.campus')->with(['datas'=>$datas,'medias'=>$medias]);
    }
}