<?php
namespace App\Http\Controllers;


use Illuminate\Routing\Controller as BaseController;
use App\Models\Provincia;
use App\Models\Uses;
use App\Models\Book;
use App\Models\Zone;
use Illuminate\Support\Facades\Session;


class InsertbookController extends BaseController{
    public function insert_provincie(){
        if (!Session::get('entry_user')){
            return redirect ('homepage');
        }
        $result['provincie']= Provincia::OrderBy('nome')->get('nome');
        return view('insertbook')->with('provincie',$result['provincie']);
        }  

    public function book_img(){    
        $isbn_book = request('isbn');    
        $curl = curl_init();
        curl_setopt($curl,CURLOPT_URL,"https://api.bookcover.longitood.com/bookcover/".$isbn_book);
        curl_setopt($curl,CURLOPT_RETURNTRANSFER, 1);
        $result = json_decode(curl_exec($curl));
        curl_close($curl);
        return $result;
    }
    public function insert_book(){

        $isbn = request('isbn');
        $title = request('title');
        $author = request('author');
        $language = request('language'); 
        $where = request('where');
        $provincia = request('provincia');
        if (strlen($isbn)===0){
            $message['isbn'] = "ISBN vuoto";}
        if (strlen($isbn)!==10 && strlen($isbn)!== 13 || (is_nan($isbn))){
            $message['isbn']  ='ISBN non valido';
        }
        if (strlen($title)===0){
            $message['title'] = "Campo titolo vuoto";}
        if (strlen($author)===0){
            $message['author'] = "Campo autore vuoto";}
        if (strlen($language)===0){
            $message['language'] = "Campo lingua vuoto";}
        if (strlen($where)===0){
            $message['where'] = "Campo luogo vuoto";}
        
        if (!isset($message)){
            $id_book = uniqid("",false);
            $url_cover = $this->book_img();
               
            if (isset($url_cover->url)){
                $cover = $url_cover->url; 
            }else{
                $cover = ("images/libri.png");
            }

            $book = new Book;
                $book -> id_book = $id_book;
                $book-> isbn = $isbn;
                $book-> title = $title;
                $book -> author = $author;
                $book -> lang = $language;
                $book -> cover = $cover;
                $book -> status = NULL;
                $book->save();

            $use = new Uses;
                $use -> id_book = $id_book;
                $use-> username = Session::get('entry_user');
                $use-> place = $where;
                $use -> provincia = $provincia;
                $use -> type_book = 0;
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
                $message['id']= $id_book;
                return $message;
        }else{
            $message['value'] = false;
            $message['text'] = "impossibile generare un ID";
            return $message;
        }
    }

    public function search_zone($provincia){
        
        $result['zone'] = (Zone::where('provincia',$provincia)
                        ->get('nome'));
        if(count($result['zone'])===0){
            $message['value'] = false;
        }else{
            $message['value']=true;
            $message['zone']=$result['zone'];
        }
        return $message;
    }   
}    


