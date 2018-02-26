<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome To the Laravel App';
        $para = 'This is an exciting App';


        return view('pages.index', compact('title','para'));
    }

    public function about(){
        $title = 'About page';
        $para = 'About description';
        return view('pages.about')->with(array('title'=>$title,'para'=>$para));
    }

    public function services(){

        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        );

        return view('pages.services')->with($data);
    }
}
