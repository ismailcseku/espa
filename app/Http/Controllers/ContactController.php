<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("contact.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $data=$request->validate([
        'name'=>['string','required','max:50'],
        'email'=>['email','required'],
        'subject'=>['string','required','max:60'],
        'phone'=>['required','string'],
        'message'=>['required','min:10','string'],
       ]);
       Contact::create($data);
       return redirect()->back()->with('success','succès');
    }

   
}