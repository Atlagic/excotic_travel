<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('layouts.template');
    }
    public function gallery(){
        return view('pages.gallery');
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
    public function register(){
        return view('pages.register');
    }   
    public function login(){
        return view('pages.login');
    }
    
    public function item(){
        return view('pages.item');
    }
}
