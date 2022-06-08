<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'this is welcome page';
        return view('pages.index', compact('title'));
    }
    public function about()
    {

        $title = 'This is about page';
        return view('pages.about')->with('x_cont', $title);
    }
    public function services()
    {

        $title_serveic = array(
            'title'=>'Services Page',
            'Services'=>['Web Design','Programming', 'SEO']
    );
        return view('pages.services')->with($title_serveic);
    }
}
