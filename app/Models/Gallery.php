<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
class Gallery extends Model
{
    public function getAllPictures(){
        $result = DB::table('galleries')
            ->select('*')
            ->take(12)
            ->get();
        return $result;
    }
}
