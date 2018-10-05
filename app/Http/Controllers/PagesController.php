<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $title = 'home';
        return view('Pages.home')->with('title',$title);
    }
}
