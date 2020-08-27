<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Certificate;

class CertificatePageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $certificates = Certificate::take(12)->get();
        return view('front/pages/certificate.certification')->with('certificates',$certificates);
    }
/**
     * Store a newly created resource in storage.
     *
     * @param  string $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $certificate = Certificate::where('slug', $slug)->firstOrFail();
        return view('front/pages/certificate.single-certificate')->with('certificate',$certificate);
    }
}
