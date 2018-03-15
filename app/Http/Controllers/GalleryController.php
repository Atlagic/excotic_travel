<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use DB;
use Illuminate\Contracts\Logging\Log;
use Auth;
use App\Models\Logs;
use Carbon\Carbon;

class GalleryController extends Controller
{
    private $data = [];

    public function index(Request $request)
    {
        $pictures = new Gallery();
        $this->data['pictures'] = $pictures->getAllPictures();

        if(Auth::check()){
            $logs = new Logs();
            $logs->ip = Auth::user()->name;
            $logs->browser = $request->header('User-Agent');
            $logs->time = Carbon::now();
            $logs->page = $request->url();
            $logs->insertLog();
            return view('pages.travelgallery', $this->data);
        }else{
            $logs = new Logs();
            $logs->ip = $request->ip();
            $logs->browser = $request->header('User-Agent');
            $logs->time = Carbon::now();
            $logs->page = $request->url();
            $logs->insertLog();
            return view('pages.travelgallery', $this->data);
        }

    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        //
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }
}
