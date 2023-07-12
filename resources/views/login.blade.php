<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <link rel = "stylesheet" href = "{{url ('CSS/header.css') }}" />
    <link rel = "stylesheet" href = "{{url ('CSS/subscribe.css') }}" />
    <link rel = "stylesheet" href = "{{url ('CSS/login.css') }}" />
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Bree+Serif">
    <script src = "{{url ('JS/login.js')}}" defer = "true"></script>
    <meta name = "viewport" content = "width = device-width, initial-scale=1">
    <title> OurBooks - Login</title>
  </head>

  <body>
    <header>      
      <div id="logo-container"> </div>
      <nav id="home-page-navbar">
        <a id="one" a href="{{url ('homepage')}}"> Home </a>
        <a id="two" a href="{{url ('subscribe')}}"> Registrati </a>
      </nav>
    </header>
    
    <section>

      <div id=overlay></div>

        <form id="subscribe-form" autocomplete="off" name="subscribe-form" method="post">
          @csrf
          <label> Username <input type="text" name="username" maxlength="35" class="data"></label>
            @if(isset ($error['username']))
            <p id= "username" class="adv error">{{ $error['username'] }}</p>
            @else
            <p id= "username" class="adv"></p> 
            @endif    
          <label> Password <input type="password" name="password" maxlength="35" class="data"> </label>
            @if(isset ($error['password']))
            <p id= "password" class="adv error">{{ $error['password'] }}</p>
            @else
            <p id= "password" class="adv"></p>
            @endif 
          <label> <input id="sub" type ="submit" name ="ok" value="Accedi" > </label>
        </form>
    </section>
  </body>
</html>