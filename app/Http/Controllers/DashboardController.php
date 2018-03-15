<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Logging\Log;
use Auth;
use App\Models\Logs;
use Carbon\Carbon;
class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        if(Auth::check()){
            $logs = new Logs();
            $logs->ip = Auth::user()->name;
            $logs->browser = $request->header('User-Agent');
            $logs->time = Carbon::now();
            $logs->page = $request->url();
            $logs->insertLog();
            return view('dashboard');
        }else{
            $logs = new Logs();
            $logs->ip = $request->ip();
            $logs->browser = $request->header('User-Agent');
            $logs->time = Carbon::now();
            $logs->page = $request->url();
            $logs->insertLog();
            return view('dashboard');;
        }

    }
}
