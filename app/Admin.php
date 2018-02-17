<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use DB;


class Admin extends Authenticatable
{
    use Notifiable;
    
    protected $guard = 'admin';

    protected $fillable = [
        'name', 'lastname', 'email', 'password',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getDeals(){
        $result = DB::table('deals')
            ->select('*')
            ->get();
        return $result;
    }
    public function getGalleries(){
        $result = DB::table('galleries')
            ->select('*')
            ->get();
        return $result;
    }
    public function getPages(){
        $result = DB::table('pages')
            ->select('*')
            ->get();
        return $result;
    }
    public function getReservations(){
        $result = DB::table('reservation')
            ->select('*')
            ->get();
        return $result;
    }
    public function getUsers(){
        $result = DB::table('users')
            ->select('*')
            ->get();
        return $result;
    }
    public function getAdmins(){
        $result = DB::table('admins')
            ->select('*')
            ->get();
        return $result;
    }
    public function getComments(){
        $result = DB::table('comments')
            ->select('*')
            ->get();
        return $result;
    }



    public function editD($id){
        $result = DB::table('deals')
            ->select('*')
            ->where('idDeal', $id)
            ->first();
        return $result;
    }
    public function editG($id){
        $result = DB::table('galleries')
            ->select('*')
            ->where('idPicture', $id)
            ->first();
        return $result;
    }
    public function editP($id){
        $result = DB::table('pages')
            ->select('*')
            ->where('idPage', $id)
            ->first();
        return $result;
    }
    public function editR($id){
        $result = DB::table('reservation')
            ->select('*')
            ->where('idReservation', $id)
            ->first();
        return $result;
    }
    public function editU($id){
        $result = DB::table('users')
            ->select('*')
            ->where('id', $id)
            ->first();
        return $result;
    }
    public function editA($id){
        $result = DB::table('admins')
            ->select('*')
            ->where('id', $id)
            ->first();
        return $result;
    }
    public function editC($id){
        $result = DB::table('comments')
            ->select('*')
            ->where('idComment', $id)
            ->first();
        return $result;
    }
}
