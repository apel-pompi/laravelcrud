<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $title = 'Wlcome to index page';
        //return view('pages.index',compact('title'));
        return view('pages.index')->with('title',$title);
    }

    public function about(){
        return view('pages.about');
    }

    public function service(){
        $data = array(
            'title'=>'This is Service Page',
            'service'=> ['web design','programming','SEO','HTML','CSS'],
        );
        return view('pages.service')->with($data);
    }
}
