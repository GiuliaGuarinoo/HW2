<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <link rel = "stylesheet" href = "{{url ('CSS/header.css') }}"  />
    <link rel = "stylesheet" href = "{{url ('CSS/tracking.css') }}"  />
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Bree+Serif">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap">
    <meta name = "viewport" content = "width = device-width, initial-scale=1">
    <title> OurBooks </title>
  </head>

  <body>
    <header>     

      <div id="logo-container"> </div>
      <nav id="home-page-navbar">
        <a id="one" a href="{{ url('profile')}}"> Profilo</a>
        <a id="two" a href="{{ url('logout')}}"> Logout</a>
      </nav>
    </header> 
    <h1>{{$result_array[0]['title']}}</h1>
    <section>
      <img class='cover' src= "{{url($result_array[0]['cover'])}}">
        @for ($i = 0; $i < count($result_array); $i++)
          @if ($i==0)
              <div id='firstrelease'>
              <h3>Primo rilascio</h3>
              <p>Data rilascio: {{date("d/m/Y",strtotime($result_array[$i]['when_release_found']))}}</p>
              <p>Luogo rilascio: {{$result_array[$i]['place']}}</p>
              </div>
          @else 
              <div class='bookinfo'>
                <img src="{{url ('images/freccia.gif')}}">
                @if ($result_array[$i]['type_book']===1)
                  <div class = 'foundbook'>
                  <h3>Ritrovato</h3>
                  <p>Data ritrovo: {{date("d/m/Y",strtotime($result_array[$i]['when_release_found']))}}</p>
                  <p class='phidden' ></p>
                @else
                  <div class = 'bookrelease'>
                  <h3>Rilasciato</h3>
                <p>Data rilascio: {{date("d/m/Y",strtotime($result_array[$i]['when_release_found']))}}</p>
                <p>Luogo rilascio: {{$result_array[$i]['place']}}</p>
                @endif
                </div>
              </div>
          @endif
        @endfor
        </div> 
    </section>
  </body>
</html>  
 