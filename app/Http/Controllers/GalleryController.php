<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use DB;

class GalleryController extends Controller
{
    private $data = [];

    public function index()
    {
        $pictures = new Gallery();
        $this->data['pictures'] = $pictures->getAllPictures();

        return view('pages.travelgallery', $this->data);
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
