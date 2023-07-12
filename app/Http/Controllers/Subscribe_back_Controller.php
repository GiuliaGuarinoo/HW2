<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class Subscribe_back_Controller extends BaseController{
    public function username_ok(){

        $error = (User::where('username',request('username'))->first());
        
        if ($error){
            $return_array['text'] = "Username già registrato";
            $return_array['error'] = true;
        } 
        else
        
            $return_array['error'] = false;

        return $return_array;
    }
    public function email_ok(){
        $error= (User::where('email',request('email'))->first());


        if ($error){
            $return_array['text'] = "Email già in uso";
            $return_array['error'] = true;
         } 
        else
            $return_array['error'] = false;
    
        return $return_array;
        
    }
}