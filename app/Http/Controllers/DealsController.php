<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Controllers\Validator;
use Illuminate\Http\Request;
use App\Models\Deals;
use DB;

class DealsController extends Controller
{
    private $data = [];

    public function index(Request $request)
    {
        $deals = new Deals();
        $this->data['deals'] = $deals->getAllDeals();

        return view('pages.deals', $this->data);
    }
    public function sort($value){
        $deals = new Deals();
        $this->data['deals'] = $deals->sort($value);

        return view('inc.dealsItems', $this->data);
    }
    public function search($value){
        $deals = new Deals();
        $this->data['deals'] = $deals->search($value);
        if($this->data['deals']['items'] === NULL){
            return "We don't have deals for that city or state";
        }
        else{
            return view('inc.dealsItems', $this->data);
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
        $item = new Deals();
        $this->data['item'] = $item->item($id);
        return view('pages.item', $this->data);
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
