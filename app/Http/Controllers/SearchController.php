<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Models\Search;
use App\Models\Downloadpage;
use Illuminate\Http\Request;
use Jorenvh\Share\ShareFacade;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $datas=Search::latest('id')->limit(1)->get();
        $shareFacebook=ShareFacade::currentPage()->facebook()->getRawLinks();
        $medias=Media::all();
        $downloads=Downloadpage::where('pagename','recherche')->get();
        return view('static.search')->with(['datas'=>$datas,'medias'=>$medias,'shareFacebook'=>$shareFacebook,'downloads'=>$downloads]);
    }
}