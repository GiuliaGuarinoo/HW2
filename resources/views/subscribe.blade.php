<!DOCTYPE html>

<html>
  <head>
    <script>
      const BASE_URL = "{{url('/')}}/";
    </script>
    <meta charset="utf-8">
    <link rel = "stylesheet" href = "{{ url('CSS/header.css')}}"/>
    <link rel = "stylesheet" href = "{{ url('CSS/subscribe.css')}}"/>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Bree+Serif">
    <script src = "{{ url('JS/subscribe.js')}}" defer = "true"></script>
    <meta name = "viewport" content = "width = device-width, initial-scale=1">
    <title> OurBooks - Subscribe</title>
  </head>

  <body>
    <header>      
      <div id="logo-container"> </div>
      <nav id="home-page-navbar">
        <a id="one" a href="{{url('homepage')}}"> Home</a>
        <a id="two" a href="{{url('login')}}"> Accedi </a>
      </nav>
    </header>
    
    <section>
      @if (isset ($ok_subscribe))
      <div id=overlay class = "overlay-index"></div>
      @else
      <div id=overlay></div>
      @endif
        <form id="subscribe-form" autocomplete="off" name="subscribe-form" method="post">
            @csrf
            @if (isset ($ok_subscribe))
            <div id='submitok' class="submit-index"><p>{{ $ok_subscribe }}<a href="{{url('login')}}"> Accedi </a></p></div>
            @endif

            <label> Username <input type="text" name="username" maxlength="35" class="data" value ='{{ old("username")}}'></label> 
            @if(isset ($error['username']))
              <p id= "username" class="adv error">{{ $error['username'] }}</p>
            @else
              <p id= "username" class="adv"></p> 
            @endif 
          
            <label> Nome<input type="text" name="nome" maxlength="35" class="data"value ='{{ old("nome")}}'></label>
            @if(isset ($error['name']))
              <p id= "name" class="adv error" >{{ $error['name'] }}</p>
            @else
              <p id= "name" class="adv" > </p>
            @endif

            <label> Cognome<input type="text" name="cognome" maxlength="35" class="data"value ='{{ old("cognome")}}'></label>    
            @if(isset ($error['surname']))
              <p id= "surname" class="adv error">{{ $error['surname'] }}</p>
            @else
              <p id= "surname" class="adv"></p>
            @endif

            <label> Email <input type="email" name="email" maxlength="35" class="data"value ='{{ old("email")}}'></label>
            @if(isset($error['email']))   
              <p id= "email" class="adv error">{{ $error['email'] }}</p>
            @else
              <p id= "email" class="adv"></p>
            @endif 
            
            <label> Password <input type="password" name="password" maxlength="35" class="data"></label>
            @if(isset($error['password']))
              <p id= "password" class="adv error">{{ $error['password'] }}</p>
            @else 
              <p id= "password" class="adv"></p>
            @endif 

            <label> Ripeti Password <input type="password" name="rpassword" maxlength="35" class="data"></label>
            @if(isset($error['rpassword'])) 
              <p id= "rpassword" class="adv error">{{ $error['rpassword'] }}</p>
            @else
              <p id= "rpassword" class="adv"></p>
            @endif 
            
            <div id="privacy-container">        
              <input type="checkbox" name="privacy"><span>Autorizzo l'uso dei miei dati personali secondo quanto stabilito dall'informativa privacy</span>
            </div>
            @if(isset($error['privacy'])) 
              <p id="privacy" class="adv error"></p>{{ $error['privacy'] }}</p>
            @else
              <p id="privacy" class="adv"></p>
            @endif 

            <input id="sub" type ="submit" name ="ok" value="Iscriviti" >
        </form>
    </section>
  </body>
</html>
