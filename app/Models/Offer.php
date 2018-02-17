<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Offer extends Model
{
    public function getAllOffers(){
        $result = DB::table('deals')
            ->select('*')
            ->limit(6)
            ->get();
        return $result;
    }
    public function item($id){
        $result = DB::table('deals')
            ->select('*')
            ->where('idDeal', $id)
            ->first();
        return $result;
    }
}
