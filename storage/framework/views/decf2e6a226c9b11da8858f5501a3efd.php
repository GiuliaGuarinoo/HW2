<!DOCTYPE html>

<html>
  <head>
  <script>
      const BASE_URL = "<?php echo e(url('/')); ?>/" 
  </script>
    <meta charset="utf-8">
    <link rel = "stylesheet" href = "<?php echo e(url ('CSS/header.css')); ?>"  />
    <link rel = "stylesheet" href = "<?php echo e(url ('CSS/profile.css')); ?>" />
    <script src = "<?php echo e(url ('JS/profile.js')); ?>" defer = "true"></script>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Bree+Serif">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap">
    <meta name = "viewport" content = "width = device-width, initial-scale=1">
    <title> OurBooks - User </title>
  </head>

  <body>
    <header>      
      <div id="logo-container"> </div>
      <nav id="home-page-navbar">
        <a id="one" a href= "<?php echo e(url('foundbook')); ?>">Ho trovato un libro</a>
        <a id="two" a href="<?php echo e(url('insertbook')); ?>"> Rilascia un libro</a>
        <a id="three" a href="<?php echo e(url('logout')); ?>"> Logout</a>
    
      </nav>
    </header>
    <section>
        <div id="img"></div>
        <h1>
          Ciao <?php echo e($result_array['user']); ?>

        </h1>
    <form id="search" >
      <input id='researchbook'type="text" name="search" placeholder="Cerca libri liberi nella tua zona">
      <input id='researchsub'type="submit" name="search_by_zone" value="">
      <img src= "./images/exit.png" id = "exit" class="hidden">
    </form>
    </section>
    <article>
        <div id="search_books"><h2>I miei primi rilasci</h2>
          <?php if( count($result_array['query'])>0): ?>
            <?php for($i=0; $i<count($result_array['query']); $i++): ?>
              <div class='bookcontainer'> <h3><?php echo e($result_array['query'][$i]['title']); ?></h3>
              <div class='bookinfo'><div class= 'info'>
              <p name='id_hidden'> ID: <?php echo e($result_array['query'][$i]['id_book']); ?></p>
              <p> ISBN: <?php echo e($result_array['query'][$i]['isbn']); ?></p>
              <p><?php echo e($result_array['query'][$i]['author']); ?></p>
              <p><?php echo e($result_array['query'][$i]['lang']); ?></p>
              <p>Data rilascio: <?php echo e(date("d/m/Y",strtotime($result_array['query'][$i]['when_release_found']))); ?></p>
              <p>Luogo rilascio: <?php echo e($result_array['query'][$i]['place']); ?></p>
              <p><a href= "<?php echo e(url('/')); ?>/tracking/<?php echo e($result_array['query'][$i]['id_book']); ?>">Scopri dove sono stato</a></p>
              </div>
              <img src= "<?php echo e($result_array['query'][$i]['cover']); ?>" class='coverbook'></div></div>
            <?php endfor; ?>
            <?php else: ?>
             <h3>Nessun libro ancora rilasciato</h3>
          <?php endif; ?>
        </div> 

        <div id ="found_books"><h2>I miei libri trovati</h2>
        
        <?php if(count($result_array['query_foundbook'])===0): ?>
            <h3>Nessun libro trovato</h3>
        
        <?php else: ?>
           <?php for($i=0; $i<count($result_array['query_foundbook']); $i++): ?>
            <form class='bookcontainer' name='release-book'> <h3><?php echo e($result_array['query_foundbook'][$i]['title']); ?></h3>
            <div class='bookinfo'><div class= 'info'><p> ISBN:<?php echo e($result_array['query_foundbook'][$i]['isbn']); ?></p>
            <p><?php echo e($result_array['query_foundbook'][$i]['author']); ?></p>
            <p><?php echo e($result_array['query_foundbook'][$i]['lang']); ?></p>
            <p> Data ritrovo: <?php echo e(date("d/m/Y",strtotime($result_array['query_foundbook'][$i]['when_release_found']))); ?></p>
            <p><a href= "<?php echo e(url('/')); ?>/tracking/<?php echo e($result_array['query_foundbook'][$i]['id_book']); ?>">Scopri dove sono stato</a></p>
            <input type='hidden' name='id_hidden' value="<?php echo e($result_array['query_foundbook'][$i]['id_book']); ?>"></div> 
            <img src=" <?php echo e($result_array['query_foundbook'][$i]['cover']); ?>" class='coverbook'>
              <?php if($result_array['query_foundbook'][$i]['status'] === $result_array['user']): ?>
                <input class='sub' type ='submit' name ='ok' value='Rilascia Libro'>
              <?php else: ?>
                <p class='sub release'> Libro Rilasciato! </p>
              <?php endif; ?>
            </div></form>
            <?php endfor; ?>
          <?php endif; ?>
        </div>

    </article> 
    <article id = 'form-results' class = 'hidden'>
    </article>
    <section class = "modal-page hidden">
    <form id="form-modal-view"name='form-modal-view' >
     <h1>Vuoi rilasciare il libro?  </h1>
     <div id=info>
          <label> Provincia di rilascio 
            <select name ="provincia">
          <?php for($i=0; $i<count($result_array['provincie']); $i++): ?>
          <option name ='pname' value ="<?php echo e($result_array['provincie'][$i]['nome']); ?>"> <?php echo e($result_array['provincie'][$i]['nome']); ?></option>
          <?php endfor; ?>
            </select>
          </label>
          <label> Luogo di rilascio <input type="text" name="where" class="data" placeholder="Sii più preciso possibile">
          <select name ='zone' class='hidden'>
          </select>
          <p class ='adv'> </p>
        </label>
        </div>
     <div id='choose'>
        <input id="submit" type ="submit" name ="submit" value="SI!" >
        <input id="button" type ="button" name ="btn_no" value="NO!" >
    </div>
    </form>
    </section>    
  </body>
</html>  
<?php /**PATH /opt/lampp/htdocs/HW2/resources/views/profile.blade.php ENDPATH**/ ?>