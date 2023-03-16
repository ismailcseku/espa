<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->validate([
            'email'=>'email|required|unique:App\Models\Newsletter,email',
        ]);
        Newsletter::create($data);
        return redirect()->back()->with('successNewsletter','succès');
    }
}