<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Models\Experience;
use App\Models\Downloadpage;
use Illuminate\Http\Request;
use Jorenvh\Share\ShareFacade;

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
        $shareFacebook=ShareFacade::currentPage()->facebook()->getRawLinks();
        $downloads=Downloadpage::where('pagename','ferme-experiementale')->get();


        return view('static.experience')->with(['datas'=>$datas,'medias'=>$medias,'shareFacebook'=>$shareFacebook,'downloads'=>$downloads]);
    }
}