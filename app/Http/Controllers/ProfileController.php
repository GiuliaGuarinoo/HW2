<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use App\Models\Book;
use App\Models\Uses;
use App\Models\Provincia;
use App\Models\Zone;
use Illuminate\Support\Facades\Session;

class ProfileController extends BaseController
{
    public function profile(){

        $result_array['query_foundbook'] = [];

        if (!Session::get('entry_user')){
            return redirect ('homepage');
        }
        $result_array['user'] = (Session::get('entry_user'));

        $result_array['query'] = Book:: join('uses', 'books.id_book', 'uses.id_book')
        ->where ('type_book', '=',0)
        ->where ('uses.username',$result_array['user'])
        ->get(['books.id_book','isbn', 'title', 'author', 'lang', 'when_release_found', 'place', 'cover']);
        
      
        $temp = Book:: join('uses', 'books.id_book', 'uses.id_book')
        ->where ('uses.username',$result_array['user'])
        ->where ('uses.type_book', '=','2')
        ->orWhere('uses.type_book', '=', '1')
        ->get(['isbn', 'title', 'author', 'lang', 'when_release_found', 'place', 'cover', 'books.id_book', 'status']); 
        
        foreach ($temp as $i){
            $max = Uses::where('id_book', '=', $i->id_book)
            ->where('uses.username',$result_array['user'])            
            ->max('when_release_found');
            if ($i->when_release_found == $max)
                array_push($result_array['query_foundbook'], $i);
        }
        
        $result_array['provincie']= Provincia::OrderBy('nome')->get('nome');

        return view('profile')->with('result_array',$result_array);
    }

    public function release_book($id,$where,$provincia){
   
    if(strlen($provincia)!==0 && strlen($where)!==0 && strlen($id)!==0){
        $use = new Uses;
        $use -> id_book = $id;
        $use-> username = Session::get('entry_user');
        $use-> place = $where;
        $use -> provincia = $provincia;
        $use -> type_book = 2;
        $use->save();
        $zone = (Zone::where('zones.nome',$where)
                        ->where('zones.provincia',$provincia)
                        ->first());
                if(!$zone){
                    $zone_insert = new Zone;
                    $zone_insert -> provincia = $provincia;
                    $zone_insert -> nome = $where;
                    $zone_insert->save();
                }   
        $message['value'] = true;
        $message['text'] = "Rilasciato";
        return $message;
    }else
        $message['value'] = false;
        return $message;
    }

    public function search_book($place_string){

        $result_array = [];
        $place_string =  (trim($place_string));

        $temp = Book:: join('uses', 'books.id_book', 'uses.id_book')
        ->where ('books.status', '=',NULL)
        ->where('uses.place', 'like',  '%'.$place_string.'%')
        ->Orwhere ('uses.provincia', 'like', '%'.$place_string.'%')
        ->get(['isbn', 'title', 'author', 'lang', 'when_release_found', 'place', 'provincia', 'cover', 'books.id_book']); 
        
        foreach ($temp as $i){
            $max = Uses::where('id_book', '=', $i->id_book)->max('when_release_found');
            if ($i->when_release_found == $max)
                array_push($result_array, $i);
        }

        if (count($result_array)===0){
            $messagefree['text']="Non ci sono dei libri liberi nella tua zona.";
            $messagefree['value']=false;
            
        }else{
            for ($i = 0;$i<count($result_array); $i++){
 
                $messagefree[$i]['id']=$result_array[$i]->id_book;
                $messagefree[$i]['isbn']=$result_array[$i]->isbn;
                $messagefree[$i]['title']=$result_array[$i]->title;
                $messagefree[$i]['author']=$result_array[$i]->author;
                $messagefree[$i]['lang']=$result_array[$i]->lang;
                $messagefree[$i]['place']=$result_array[$i]->place;
                $messagefree[$i]['provincia']=$result_array[$i]->provincia;
                $messagefree[$i]['cover']=$result_array[$i]->cover;
    
                
                }
            }
            return $messagefree;
        }
}
