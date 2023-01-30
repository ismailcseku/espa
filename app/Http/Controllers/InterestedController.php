<?php

namespace App\Http\Controllers;

use App\Http\Utils\Levels;
use App\Models\Interested;
use Illuminate\Http\Request;
use App\Http\Utils\Countries;
use App\Http\Utils\Provinces;
use Illuminate\Validation\Rule;


class InterestedController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request ,int $id)
    {
   $data=$request->validate([
            'gender'=>['required','string',Rule::in(['Mlle','Mme','Mr'])],
            'name'=>['required','string','max:50','min:2'],
             'surname'=>['required','string','max:100','min:2'],
            'email'=>['required','email'],
            'birth'=>['required','date','before:tomorrow'],
            'country'=>['required','string',Rule::in(Countries::getting())],
            'province'=>['required','string',Rule::in(Provinces::getting())],
            'phone'=>['required','string','digits:10'],
            'indicatif'=>['required','string'],
            'level'=>['required','string',Rule::in(Levels::getting())],
           'grade'=>['required','string'],
           'accepted'=>['required','string'],
        ]);  
        $data['course_id']=$id;
        Interested::create($data);
        return redirect()->back()->with('success','succès');
    }
}