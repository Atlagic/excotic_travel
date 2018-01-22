<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $table = 'deals';
    public $primaryKey = 'idDeal';
    public $header = 'header';
    public $place = 'place';
    public $title = 'title';
    public $title2 = 'title2';
    public $time = 'time';
    public $price = 'price';
    public $date = 'date';
    public $picture = 'picture';
    public $timestamps = false;
}
