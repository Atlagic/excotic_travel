<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.home');
    }
    public function home(){
        return view('pages.home');
    }
    public function gallery(){
        return view('pages.travelgallery');
    }
    public function deals(){
        return view('pages.deals');
    }   
    public function about(){
        return view('pages.about');
    }
    public function contact(){
        return view('pages.contact');
    }  
    public function item(){
        return view('pages.item');
    }
    public function pagenotfound(){
        return view('errors.503');
    }
//    public function logout(){
//        return view('pages.home');
//    }
}
