<?php
/**
 * Created by PhpStorm.
 * User: Aleksandar
 * Date: 14.3.2018.
 * Time: 22.01
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use Carbon\Carbon;

class Logs extends Model
{
    public $ip;
    public $browser;
    public $time;
    public $page;
    public $timestamps = false;

    public function insertLog(){
        DB::table('logs')->insertGetId(
            [
                'ipAddress' => $this->ip,
                'browser' => $this->browser,
                'time' => $this->time,
                'page' =>  $this->page,
            ]
        );
    }
}