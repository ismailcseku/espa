<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Models\Director;
use App\Models\Downloadpage;
use Illuminate\Http\Request;
use Jorenvh\Share\ShareFacade;

class DirectorController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $datas=Director::latest('id')->limit(1)->get();
        $shareFacebook=ShareFacade::currentPage()->facebook()->getRawLinks();
        $medias=Media::all();
        $downloads=Downloadpage::where('pagename','mot-du-directeur')->get();
        return view('director')->with(['datas'=>$datas,'medias'=>$medias,'shareFacebook'=>$shareFacebook,'downloads'=>$downloads]);
    }
}