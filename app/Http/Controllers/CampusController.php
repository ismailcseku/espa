<?php

namespace App\Http\Controllers;

use App\Models\Campus;
use App\Models\Downloadpage;
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
        $downloads=Downloadpage::where('pagename','campus')->get();
        return view('static.campus')->with(['datas'=>$datas,'medias'=>$medias,'downloads'=>$downloads]);
    }
}