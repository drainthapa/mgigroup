<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Career;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $careers = Career::take(12)->get();
        return view('front/pages/career.careers')->with('careers',$careers);
    }

   /**
     * Store a newly created resource in storage.
     *
     * @param  string $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $career = Career::where('slug',$slug)->firstOrFail();
        return view('front/pages/career.careersdetails')->with('career',$career);
    }

}
