<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Category extends Model
{
    public function scopeSearch($query, $search){
        return $query->where('place', 'like', '%' .$search. '%');
    }
}
