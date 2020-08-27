<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::take(9)->get();
        return view('front/pages/newsblog.news')->with('blogs',$blogs);
    }
      
  /**
     * Store a newly created resource in storage.
     *
     * @param  string $slug
     * @return \Illuminate\Http\Response
     */
    public function showblog($slug)
    {
        $blog= Blog::where('slug',$slug)->firstOrFail();
        return view('front/pages/newsblog.single-news')->with('blog',$blog);
    }

}
