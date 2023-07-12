<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Models\Uses;
use App\Models\Book;
use Illuminate\Support\Facades\Session;

class TrackingController extends BaseController
{
    public function trace_book($id){

        if (!Session::get('entry_user')){
            return redirect ('homepage');
        }
        $result_array = Book:: join('uses', 'books.id_book', 'uses.id_book')
        ->where ('books.id_book', $id)
        ->orderBy('when_release_found','asc')
        ->get(['when_release_found', 'place', 'title', 'cover', 'type_book']);

        return view('tracking')->with('result_array',$result_array);
    }
}