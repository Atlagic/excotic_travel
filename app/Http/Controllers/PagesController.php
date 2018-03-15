<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Logging\Log;
use Auth;
use App\Models\Logs;
use Carbon\Carbon;

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
    public function about(Request $request){
        if(Auth::check()){
            $logs = new Logs();
            $logs->ip = Auth::user()->name;
            $logs->browser = $request->header('User-Agent');
            $logs->time = Carbon::now();
            $logs->page = $request->url();
            $logs->insertLog();
            return view('pages.about');
        }else{
            $logs = new Logs();
            $logs->ip = $request->ip();
            $logs->browser = $request->header('User-Agent');
            $logs->time = Carbon::now();
            $logs->page = $request->url();
            $logs->insertLog();
            return view('pages.about');
        }

    }
    public function contact(Request $request){
        if(Auth::check()){
            $logs = new Logs();
            $logs->ip = Auth::user()->name;
            $logs->browser = $request->header('User-Agent');
            $logs->time = Carbon::now();
            $logs->page = $request->url();
            $logs->insertLog();
            return view('pages.contact');
        }else{
            $logs = new Logs();
            $logs->ip = $request->ip();
            $logs->browser = $request->header('User-Agent');
            $logs->time = Carbon::now();
            $logs->page = $request->url();
            $logs->insertLog();
            return view('pages.contact');
        }

    }  
    public function item(Request $request){

        if(Auth::check()){
            $logs = new Logs();
            $logs->ip = Auth::user()->name;
            $logs->browser = $request->header('User-Agent');
            $logs->time = Carbon::now();
            $logs->page = $request->url();
            $logs->insertLog();
            return view('pages.item');
        }else{
            $logs = new Logs();
            $logs->ip = $request->ip();
            $logs->browser = $request->header('User-Agent');
            $logs->time = Carbon::now();
            $logs->page = $request->url();
            $logs->insertLog();
            return view('pages.item');
        }
    }
    public function pagenotfound(){
        return view('errors.503');
    }
//    public function logout(){
//        return view('pages.home');
//    }
}
