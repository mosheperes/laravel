<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title='welcome to laravel!';
        // return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }
    public function about() {
        $title= 'about laravel';
        return view('pages.about')->with('title',$title);
    }

    public function services() {
        $data= array(
            'title' => 'SERVICES' ,
            'services' => ['Web design', 'seldat', 'shorify', 'BORED']
        );
        // $title='Our Services';
        // return view('pages.services')->with('title',$title);
         return view('pages.services')->with($data);

    }
}
