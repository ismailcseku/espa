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
         
        ]);  
        dd($data);
        
        $data['course_id']=$id;
        
        Interested::create($data);
        return redirect()->back()->with('success','succès');
    }
}