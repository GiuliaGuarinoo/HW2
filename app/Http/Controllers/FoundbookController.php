<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use App\Models\Book;
use App\Models\Uses;
use Illuminate\Support\Facades\Session;



class FoundBookController extends BaseController{
    public function foundbook(){
        if (!Session::get('entry_user')){
            return redirect ('homepage');
        }
        $result_array['user'] = (Session::get('entry_user'));
        return view('foundbook')->with('result_array',$result_array);;
    } 
    public function book_by_id(){
        $id_value = request('id');  
        $book =Book:: join('uses', 'books.id_book', 'uses.id_book')  
        ->where('books.id_book',$id_value)
        ->orderBy('when_release_found','desc')
        ->first(['books.isbn', 'title', 'author', 'lang', 'when_release_found', 'place', 'cover', 'type_book']);
        if (!$book){
            $message['text']="Codice inesistente.";
            $message['value']=false;
        }else{
            $message['id']=$id_value;
            $message['isbn']=($book->isbn);
            $message['title']=($book->title);
            $message['author']=($book->author);
            $message['lang']=($book->lang);
            $message['cover']=($book->cover);
            $message['type']=($book->type_book);
            $message['value']= true;             
        }
    return $message;

    }
        
    function update_db(){
        $result_book = $this->book_by_id();
        if ($result_book['value']===true && $result_book['type']!== '1'){
            $use = new Uses;
            $use -> id_book = $result_book['id'];
            $use-> username = Session::get('entry_user');
            $use -> type_book = 1;
            $use->save();
            $return['text'] = "Grazie per aver contribuito a tracciare il libro. Buona lettura!";
            $return['error'] = true;
        }else {
            $return['text'] = "Libro non ancora rilasciato";
            $return['error'] = false;
        }
     return $return;
    }
     
}

