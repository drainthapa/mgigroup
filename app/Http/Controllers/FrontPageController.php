<?php

namespace App\Http\Controllers;

use App\Slider;
use App\Introduction;
use App\CompanyGroup;
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
        return view('front.front')->with([
            'sliders' => $sliders,
            'introductions' => $introductions,
            'companygroups' => $companygroups,
        ]);
    }

}
