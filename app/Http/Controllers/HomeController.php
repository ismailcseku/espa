<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Slide;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $courses = DB::table('courses')->join('modalities','modalities.id','=','courses.modality_id')
        ->join('degrees','degrees.id','=','courses.degree_id')
        ->join('languages','languages.id','=','courses.language_id')
        ->select('courses.*','modalities.name as modalitiy_name','degrees.name as degrees_name','languages.name as languages_name')
        ->orderByDesc('courses.created_at')
        ->limit(8)->get();
        $slides=Slide::all();

        foreach ($courses as $key => $course) {
            $course->datelimite=Carbon::parse( $course->datelimite)->locale('FR_fr')->diffForHumans();
            $course->description=substr($course->description,0,200);
        }
;        return  view('home')->with(['courses'=>$courses,'slides'=>$slides]);
    }
}