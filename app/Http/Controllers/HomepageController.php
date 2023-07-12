<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class HomepageController extends BaseController
{
    public function homepage(){

            return view('homepage');
    }
}