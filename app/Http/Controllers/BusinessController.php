<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Models\Business;
use App\Models\Downloadpage;
use Illuminate\Http\Request;
use Jorenvh\Share\ShareFacade;

class BusinessController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $datas=Business::latest('id')->limit(1)->get();
        $medias=Media::all();
        $shareFacebook=ShareFacade::currentPage()->facebook()->getRawLinks();
        $downloads=Downloadpage::where('pagename','agri-business')->get();

        return view('static.business')->with(['datas'=>$datas,'medias'=>$medias,'shareFacebook'=>$shareFacebook,'downloads'=>$downloads]);
    }
}