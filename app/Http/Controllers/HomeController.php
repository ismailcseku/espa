<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Slide;
use App\Models\Course;

use App\Models\Degree;
use App\Models\Responsable;
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
        ->leftjoin('responsables','responsables.id','=','courses.responsable_id')
        ->select('courses.*','modalities.name as modalitiy_name','degrees.name as degrees_name','degrees.id as degrees_id','languages.name as languages_name','responsables.photo as responsables_photo')
        ->orderByDesc('courses.created_at')
        ->get();
        $slides=Slide::all();
    
        $degrees=Degree::all();
        
        
        $responsables=DB::table('responsables')->limit(4)->get();
        foreach ($courses as $key => $course) {
            $course->datelimite=Carbon::parse($course->datelimite)->toObject();
            $course->description=substr($course->description,0,200);
        }
        $evenements=DB::table('evenements')->limit(3)->get();
        $blogs=DB::table('blogs')->limit(3)->get()->map(function($item,$key){
            $item->description=substr($item->description,0,60);
            return $item;
       });


        return  view('home')->with(['courses'=>$courses,'slides'=>$slides,'degrees'=>$degrees,'responsables'=>$responsables,'evenements'=>$evenements,'blogs'=>$blogs]);
    } 
}