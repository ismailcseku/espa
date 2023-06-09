<?php

namespace App\Http\Controllers;

use App\Models\Evenement;
use Illuminate\Http\Request;
use App\Models\Evenementpage;
use Jorenvh\Share\ShareFacade;
use App\Jobs\JobMessageEvenement;
use App\Mail\SendMessageEvenement;
use App\Models\EvenementInterested;
use Illuminate\Support\Facades\Mail;

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

   



    public function show(Evenement $evenement)
    {
         
         $shareFacebook=ShareFacade::currentPage()->facebook()->getRawLinks();
         $shareWhatsapp=ShareFacade::currentPage()->whatsapp()->getRawLinks();
         $shareLinkedin=ShareFacade::currentPage()->linkedin()->getRawLinks();
         $evenementPages=Evenementpage::where('evenement_id',$evenement->id)->get();
         
        return view('evenement.show')->with(['evenements'=>$evenement,'evenementPages'=>$evenementPages,'shareFacebook'=>$shareFacebook,'shareWhatsapp'=>$shareWhatsapp,'shareLinkedin'=>$shareLinkedin]);
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
      $evenement=Evenement::find($id);
      EvenementInterested::create($data);
      JobMessageEvenement::dispatch($request->email,$evenement->title,$request->name,$evenement->location,$evenement->start_at,$evenement->end_at,$id);
      return redirect()->back()->with('success','succès');
    }
}