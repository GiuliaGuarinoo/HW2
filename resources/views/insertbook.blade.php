<!DOCTYPE html>

<html>
  <head>
    <script>
      const BASE_URL = "{{url('/')}}/" 
    </script>
    <meta charset="utf-8">
    <link rel = "stylesheet" href = "{{ url ('CSS/header.css') }}" />
    <link rel = "stylesheet" href = "{{ url ('CSS/subscribe.css')}}" />
    <link rel = "stylesheet" href = "{{ url ('CSS/insertbook.css')}}" />
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Bree+Serif">
    <script src = "{{ url('JS/insertbook.js')}}" defer = "true"></script>
    <meta name = "viewport" content = "width = device-width, initial-scale=1">
    <title> OurBooks - User </title>
  </head>

  <body>
    <header>      
      <div id="logo-container"> </div>
      <nav id="home-page-navbar">
        <a id="one" a href="{{ url('profile')}}">Profilo</a>
        <a id="two" a href="{{ url('logout')}}"> Logout</a>
      </nav>
    </header>
    <section>
        <h1> Che libro vuoi rilasciare? </h1>
        <form id="insert-form" autocomplete="off" name="insert-form" method="post">
          @csrf
          <label> ISBN <input type="text" name="isbn" class="data"></label>   
          @if(isset ($message['isbn']))
              <p id= "isbn" class="adv error">{{ $message['isbn'] }}</p>
          @else
              <p id= "isbn" class="adv"></p>
          @endif

          <label> Titolo <input type="text" name="title" class="data"></label> 
          @if(isset ($message['title']))
              <p id= "title" class="adv error">{{ $message['title'] }}</p>
          @else
              <p id= "title" class="adv"></p>
          @endif

          <label> Autore <input type="text" name="author" class="data"></label> 
          @if(isset ($message['author']))
              <p id= "author" class="adv error">{{ $message['author'] }}</p>
          @else
              <p id= "author" class="adv"></p>
          @endif

          <label> Lingua <input type="text" name="language" class="data"></label>  
          @if(isset ($message['language']))
              <p id= "language" class="adv error">{{ $message['language'] }}</p>
          @else
              <p id= "language" class="adv"></p>
          @endif

          <label> Provincia di rilascio <select name ="provincia">
          @for ($i=0; $i<count($provincie); $i++)
            <option value ="{{$provincie[$i]['nome']}}"> {{$provincie[$i]['nome']}}</option>
          @endfor
          </select>
          </label>

          <label> Luogo di rilascio <input type="text" name="where" class="data" placeholder="Sii più preciso possibile"></label>
          <select name ='zone' class='hidden'>
          </select>
          @if(isset ($message['where']))
              <p id= "where" class="adv error">{{ $message['where'] }}</p>
          @else
              <p id= "where" class="adv"></p>
          @endif

          <input id="button" type ="button" name ="button" value="Rilascia" >   
        </form>    
    </section> 
    <section class = "modal-page hidden">
    <form id="form-modal-view" >
    <img src="{{url('./images/exit.png')}}" id = "exit" class="hidden">
    <div id =submitok> </div>
     <h1 id='ans'>Confermi di voler rilasciare il libro?  </h1>
     <div id='choose'>
        <input id="submit" type ="submit" name ="submit" value="SI!" >
        <input id="button" type ="button" name ="btn_no" value="NO!" >
    </div>
    </form>
    </section>
  </body>
</html>  
