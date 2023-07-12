<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class SubscribeController extends BaseController
{
    public function subscribe_form(){
        if (Session::get('entry_user')){
            return redirect ('profile');
        }
            return view('subscribe');
    }
    public function subscribe_ok(){

        $username = request('username');
        $name = request('nome');
        $surname = request('cognome');
        $email = request('email');
        $password = request('password');
        $rpassword = request('rpassword');

        $regex_username =('/^[a-z0-9]+$/i');
        
        if (strlen($username) === 0){
            $error_message['username']="Campo username vuoto";
        }elseif (!preg_match($regex_username, $username)){
            $error_message['username']="Username non valido";
        }elseif (User::where('username',$username)->first()){
            $error_message['username']= "Username già esistente";
        }

        if (strlen($name) === 0){
            $error_message['name']="Campo nome vuoto";}

        if (strlen($surname)==0){
            $error_message['surname']="Campo cognome vuoto";}
        
        
        if  (!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $error_message['email']="Formato email non valido";
        }elseif (User::where('email',$email)->first()){
            $error_message['email']= "Email già esistente";
        }

        if  (strcmp($password, $rpassword)  !== 0 &&(strlen($password) !== 0)){
            $error_message['rpassword']="Le password non coincidono";
        }

        if  (strlen($password<8)){
            $error_message['password']="Deve contenere almeno 8 caratteri";
        }
        
        if(!request('privacy')){
            $error_message['privacy']="Accettare l'informativa privacy";
        }
        
        if (isset($error_message)){
            return view('subscribe')->with('error', $error_message);
        }else {
            $user = new User;
            $user -> username = $username;
            $user -> email = $email;
            $user -> nome = $name;
            $user -> cognome = $surname;
            $user -> password = password_hash($password,PASSWORD_BCRYPT);
            $user->save();
            $message = "Utente registrato con successo";
            return view('subscribe')->with('ok_subscribe',$message);
        }
        
    }
}