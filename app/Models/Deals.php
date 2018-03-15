<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Support\Facades\Request;

class Deals extends Model
{
    public function getAllDeals(){
        $result = DB::table('deals')
            ->select('*')
            ->orderBy('date','asc')
            ->paginate(4);
        return $result;
    }
    public function item($id){
        $result = DB::table('deals')
            ->select('*')
            ->where('idDeal', $id)
            ->first();
        return $result;
    }
    public function sort($value){
        $result = DB::table('deals')
            ->select('*')
            ->orderBy('price', $value)
            ->paginate(4);
        return $result;
    }
    public function search($value){
        $result = DB::table('deals')
            ->select('*')
            ->where('place', 'LIKE', '%'.$value.'%')
            ->get();
        return $result;}

}
