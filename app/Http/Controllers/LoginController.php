<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class LoginController extends BaseController
{
    public function login_form(){
            if (Session::get('entry_user')){
                return redirect ('profile');
            }
            return view('login');
    }
    public function login_ok(){

        $username = request('username');
        $password = request('password');
        
       

        if (strlen($username) === 0){
            $error_message['username']="Campo username vuoto";}
        else{
            $user = (User::where('username',$username)->first());
                if (!$user){
                    $error_message['username']="Username non valido";}
                elseif (!password_verify($password,$user->password)){
                    $error_message['password']="Password non valida";
            }
        } 
        if (strlen($password) === 0){
             $error_message['password']="Campo password vuoto";}

         if (isset($error_message)){
            return view('login')->with('error', $error_message);}
        else{
            Session::put('entry_user',$user->username);
            return redirect('profile');
        }
    }
}