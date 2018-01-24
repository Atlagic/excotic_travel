<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    protected $table = 'pages';
    public $primaryKey = 'idPage';
    public $name = 'name';
    public $title = 'title';
    public $timestamps = false;
}
