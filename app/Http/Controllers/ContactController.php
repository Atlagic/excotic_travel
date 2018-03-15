<?php
/**
 * Created by PhpStorm.
 * User: Aleksandar
 * Date: 17.2.2018.
 * Time: 22.25
 */

namespace App\Http\Controllers;

use App\Mail\NewUserWelcome;
use Mail;
use Illuminate\Http\Request;
use App\Http\Controllers\Validator;
use Illuminate\Contracts\Session\Session;
use Illuminate\Routing\Route;
use Auth;

class ContactController extends Controller
{
    public function sendEmail(Request $request){
        $this->validate($request, [
           'contactmail' => 'required|email'
        ]);
        $data = array(
          'contactmail' => $request->email,
          'subject' => $request->subject,
          'bodyMessage' => $request->message
        );
        try {
            Mail::to(Auth::user()->email)->send(new NewUserWelcome());

            return redirect('/contact')->with('success', 'We will send new dels to ' . $request->input('contactmail') . ' Thanks ' . Auth::user()->name . ' for subscribe!');
        }
        catch(\ErrorException $ex) {
            \Log::error('Problem sa slanjem mejla!! '.$ex->getMessage());
            return redirect()->back()->with('error','Doslo je do greske!');
        }
        }
}