<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'galleries';
    public $primaryKey = 'idPicture';
    public $smallPicture = 'smallPicture';
    public $bigPicture = 'bigPicture';
    public $alt = 'alt';
}
