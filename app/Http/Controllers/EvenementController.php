<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Models\Evenement;
use Illuminate\Http\Request;
use Jorenvh\Share\ShareFacade;
use App\Models\EvenementInterested;

class EvenementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $evenements=Evenement::all();
        return view('evenement.index')->with(['evenements'=>$evenements]);
    }

   



    public function show($id)
    {
         $evenements=Evenement::findOrFail($id);
         $medias=Media::all();
         $shareFacebook=ShareFacade::currentPage()->facebook()->getRawLinks();
         
        return view('evenement.show')->with(['evenements'=>$evenements,'medias'=>$medias,'shareFacebook'=>$shareFacebook]);
    }

 
   
    public function signIn($id,Request $request)
    {
      $data=$request->validate([
        'name'=>['required','string','max:150'],
        'email'=>['email','required'],
        'phone'=>['required','string'],
        'organism'=>['required','string'],
        'poste'=>['required','string'],
      ]);
      $data['evenement_id']=$id;
      
      
      EvenementInterested::create($data);
      return redirect()->back()->with('success','succès');
    }
}