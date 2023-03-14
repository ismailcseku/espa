<?php

namespace App\Http\Controllers;

use App\Http\Utils\Levels;
use App\Models\Interested;
use Illuminate\Http\Request;
use App\Http\Utils\Countries;
use App\Http\Utils\Provinces;
use Illuminate\Validation\Rule;
use App\Mail\SendMessageInterested;
use Illuminate\Support\Facades\Mail;


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
            'country'=>['required','string'],
            'province'=>['string'],
            'phone'=>['required','string'],
            'level'=>['required','string'],
            'grade'=>['string'],
            'accepted'=>['required','string'],
        ]);  

        $data['phone']='+'.$request->indice . ' | ' . $data['phone'];
       
        
        $data['course_id']=$id;
        
        Interested::create($data);
        Mail::to($request->email)->send(new SendMessageInterested());
        return redirect()->back()->with('success','succès');
    }
}