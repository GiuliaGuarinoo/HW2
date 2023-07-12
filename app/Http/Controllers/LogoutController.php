<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class LogoutController extends BaseController
{
    public function logout_page(){
        if (Session::get('entry_user')){
            $logout_user = (Session::get('entry_user'));
            Session::flush();
            return view ('logout')->with('logout_user',$logout_user);
        }else {
            return view ('homepage');
        }
    }
}