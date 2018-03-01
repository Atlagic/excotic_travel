<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    public function isAdmin()
    {
        return $this->admin; // this looks for an admin column in your users table
    }

    protected $fillable = [
        'name', 'lastname', 'email', 'password', 'admin'
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];
    
//    protected $casts = [
//        'is_admin' => 'boolean',
//    ];
//
}
