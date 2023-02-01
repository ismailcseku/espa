<?php

namespace App\Http\Controllers; 

use Carbon\Carbon;
use App\Models\Course;
use App\Models\Degree;
use App\Models\Timing;
use App\Models\Program;
use App\Models\Download;
use App\Http\Utils\Levels;
use Illuminate\Http\Request;
use App\Http\Utils\Countries;
use App\Http\Utils\Provinces;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        $courses=DB::table('courses')->join('modalities','modalities.id','=','courses.modality_id')
        ->join('degrees','degrees.id','=','courses.degree_id')
        ->join('languages','languages.id','=','courses.language_id')
        ->join('modes','modes.id','=','courses.mode_id')
        ->join('responsables','responsables.id','=','courses.responsable_id')
        ->select('courses.*','modalities.name as modalitiy_name','degrees.name as degrees_name','languages.name as languages_name','modes.name as modes_name','responsables.photo as responsables_photo')
        ->get();
      
        foreach ($courses as $key => $item) {
            $item->datelimite=Carbon::parse($item->datelimite)->toObject();
            $item->description=substr($item->description,0,200);    
        } 
        return view('courses.index')->with([
            'courses'=>$courses,
            
        ]);

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
      
        $val=$course->where('courses.id',$course->id)->join('modalities','modalities.id','=','courses.modality_id')
        ->join('degrees','degrees.id','=','courses.degree_id')
        ->join('languages','languages.id','=','courses.language_id')
        ->join('modes','modes.id','=','courses.mode_id')
        ->join('responsables','responsables.id','=','courses.responsable_id')
        ->select('courses.*','modalities.name as modalitiy_name','degrees.name as degrees_name','languages.name as languages_name','modes.name as modes_name','responsables.name as responsables_name')
        ->get();
       

        foreach ($val as $key => $item) {
            Carbon::parse($item->datelimite)->locale('FR_fr')->diffForHumans();
        }
        $programs=Program::where('course_id',$course->id)->get();
        $downloads=Download::where('course_id',$course->id)->get();
        $degrees=Degree::all();
        
        $last_courses= $course->join('modalities','modalities.id','=','courses.modality_id')
        ->select('courses.name','courses.id','modalities.name as modalitiy_name')
        ->orderByDesc('courses.created_at')
        ->limit(3)->get();
        dd('ddf');
        $countries=Countries::getting();
        $provinces=Provinces::getting();
        $levels=Levels::getting();
        
        return view('courses.details')->with([
            'courses'=>$val,
            'programs'=> $programs, 
            'downloads'=> $downloads, 
            'degrees'=>$degrees,
            'last_courses'=>$last_courses,
            'countries'=>$countries,
            'provinces'=>$provinces,
            'levels'=>$levels,
        ]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        //
    }
}