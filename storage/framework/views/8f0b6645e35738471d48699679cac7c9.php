<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <link rel = "stylesheet" href = "<?php echo e(url ('CSS/header.css')); ?>"  />
    <link rel = "stylesheet" href = "<?php echo e(url ('CSS/tracking.css')); ?>"  />
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Bree+Serif">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap">
    <meta name = "viewport" content = "width = device-width, initial-scale=1">
    <title> OurBooks </title>
  </head>

  <body>
    <header>     

      <div id="logo-container"> </div>
      <nav id="home-page-navbar">
        <a id="one" a href="<?php echo e(url('profile')); ?>"> Profilo</a>
        <a id="two" a href="<?php echo e(url('logout')); ?>"> Logout</a>
      </nav>
    </header> 
    <h1><?php echo e($result_array[0]['title']); ?></h1>
    <section>
      <img class='cover' src= "<?php echo e(url($result_array[0]['cover'])); ?>">
        <?php for($i = 0; $i < count($result_array); $i++): ?>
          <?php if($i==0): ?>
              <div id='firstrelease'>
              <h3>Primo rilascio</h3>
              <p>Data rilascio: <?php echo e(date("d/m/Y",strtotime($result_array[$i]['when_release_found']))); ?></p>
              <p>Luogo rilascio: <?php echo e($result_array[$i]['place']); ?></p>
              </div>
          <?php else: ?> 
              <div class='bookinfo'>
                <img src="<?php echo e(url ('images/freccia.gif')); ?>">
                <?php if($result_array[$i]['type_book']===1): ?>
                  <div class = 'foundbook'>
                  <h3>Ritrovato</h3>
                  <p>Data ritrovo: <?php echo e(date("d/m/Y",strtotime($result_array[$i]['when_release_found']))); ?></p>
                  <p class='phidden' ></p>
                <?php else: ?>
                  <div class = 'bookrelease'>
                  <h3>Rilasciato</h3>
                <p>Data rilascio: <?php echo e(date("d/m/Y",strtotime($result_array[$i]['when_release_found']))); ?></p>
                <p>Luogo rilascio: <?php echo e($result_array[$i]['place']); ?></p>
                <?php endif; ?>
                </div>
              </div>
          <?php endif; ?>
        <?php endfor; ?>
        </div> 
    </section>
  </body>
</html>  
 <?php /**PATH /opt/lampp/htdocs/HW2/resources/views/tracking.blade.php ENDPATH**/ ?>