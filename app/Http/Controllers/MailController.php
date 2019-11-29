<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\User;
use Illuminate\Support\Facades\Hash;

class MailController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index(){
        return view('lupa');
    }

    public function sendMail(Request $request){
        $email = $request->input('email');
        
        $user = User::where('email', $email)->first();

        if($user)
        {
            $name = $user->name;
            $password = Hash::info($user->password) ;
            $to_email = $email;
            $data = ["name"=>$name, "body" => $password];
            Mail::send('mail', $data, function($msg) use ($to_email){
                $msg->to($to_email)
                ->subject('Lupa Password'); 
            });

            return redirect('/');
        }else
        {
            return redirect('lupa')->with('status', 'Email salah atau tidak terdaftar');
        }
    }
}
