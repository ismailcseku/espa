<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\CategoryBlog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs=DB::table('blogs')->select('blogs.*')->get();
        return view('blog.index')->with(['blogs'=>$blogs]);
    }

  

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blogs=Blog::findOrFail($id);
        $categories=CategoryBlog::all();
        $latests=DB::table('blogs')->limit(3)->orderBy('created_at')->get()->map(function($item,$key){
             $item->description=substr($item->description,0,60);
             return $item;
        });
     
        
        
        return view('blog.show')->with(['blogs'=>$blogs,'categories'=>$categories,'latests'=>$latests]);
    }

 


}