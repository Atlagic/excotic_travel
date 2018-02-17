<?php
/**
 * Created by PhpStorm.
 * User: Aleksandar
 * Date: 10.2.2018.
 * Time: 21.48
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Support\Facades\Request;


class Comments extends Model
{
    public function getComments($id){
        $result = DB::table('comments')
            ->select('*')
            ->leftJoin('deals','deals.idDeal','=','comments.idDeal')
            ->leftJoin('users AS u','u.id','=','comments.idUser')
            ->where('comments.idDeal', $id)
            ->get();
        return $result;
    }
}