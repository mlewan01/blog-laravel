<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'welcome to my blog';
//        return view('pages.index', compact('title   '));
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        $title = 'About Us';
        return view('pages.about');
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['web disign', 'programming', 'seo']
        );
        return view('pages.services')->with($data);
    }
}
