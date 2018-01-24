<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function scopeSearch($query, $search){
        return $query->where('place', 'like', '%' .$search. '%');
    }
}
