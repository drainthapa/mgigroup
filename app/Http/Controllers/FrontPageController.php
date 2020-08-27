<?php

namespace App\Http\Controllers;

use App\Slider;
use App\Introduction;
use App\CompanyGroup;
use App\Blog;
use App\Footer;
use Illuminate\Http\Request;

class FrontPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::take(3)->get();
        $introductions = Introduction::get();
        $companygroups = CompanyGroup::get();
        $blogs = Blog::take(3)->get();
        $footers = Footer::get();
        return view('front.front')->with([
            'sliders' => $sliders,
            'introductions' => $introductions,
            'companygroups' => $companygroups,
            'blogs' => $blogs,
            'footers' => $footers,
        ]);
    }
      
     /**
     * Store a newly created resource in storage.
     *
     * @param  string $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $companygroup = CompanyGroup::where('slug', $slug)->firstOrFail();
        return view('front/pages/companygroup.company-details')->with('companygroup',$companygroup);
    }



}
