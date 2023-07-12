<!DOCTYPE html>

<html>
  <head>
    <script>
      const BASE_URL = "<?php echo e(url('/')); ?>/" 
    </script>
    <meta charset="utf-8">
    <link rel = "stylesheet" href = "<?php echo e(url ('CSS/header.css')); ?>" />
    <link rel = "stylesheet" href = "<?php echo e(url ('CSS/subscribe.css')); ?>" />
    <link rel = "stylesheet" href = "<?php echo e(url ('CSS/insertbook.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Bree+Serif">
    <script src = "<?php echo e(url('JS/insertbook.js')); ?>" defer = "true"></script>
    <meta name = "viewport" content = "width = device-width, initial-scale=1">
    <title> OurBooks - User </title>
  </head>

  <body>
    <header>      
      <div id="logo-container"> </div>
      <nav id="home-page-navbar">
        <a id="one" a href="<?php echo e(url('profile')); ?>">Profilo</a>
        <a id="two" a href="<?php echo e(url('logout')); ?>"> Logout</a>
      </nav>
    </header>
    <section>
        <h1> Che libro vuoi rilasciare? </h1>
        <form id="insert-form" autocomplete="off" name="insert-form" method="post">
          <?php echo csrf_field(); ?>
          <label> ISBN <input type="text" name="isbn" class="data"></label>   
          <?php if(isset ($message['isbn'])): ?>
              <p id= "isbn" class="adv error"><?php echo e($message['isbn']); ?></p>
          <?php else: ?>
              <p id= "isbn" class="adv"></p>
          <?php endif; ?>

          <label> Titolo <input type="text" name="title" class="data"></label> 
          <?php if(isset ($message['title'])): ?>
              <p id= "title" class="adv error"><?php echo e($message['title']); ?></p>
          <?php else: ?>
              <p id= "title" class="adv"></p>
          <?php endif; ?>

          <label> Autore <input type="text" name="author" class="data"></label> 
          <?php if(isset ($message['author'])): ?>
              <p id= "author" class="adv error"><?php echo e($message['author']); ?></p>
          <?php else: ?>
              <p id= "author" class="adv"></p>
          <?php endif; ?>

          <label> Lingua <input type="text" name="language" class="data"></label>  
          <?php if(isset ($message['language'])): ?>
              <p id= "language" class="adv error"><?php echo e($message['language']); ?></p>
          <?php else: ?>
              <p id= "language" class="adv"></p>
          <?php endif; ?>

          <label> Provincia di rilascio <select name ="provincia">
          <?php for($i=0; $i<count($provincie); $i++): ?>
            <option value ="<?php echo e($provincie[$i]['nome']); ?>"> <?php echo e($provincie[$i]['nome']); ?></option>
          <?php endfor; ?>
          </select>
          </label>

          <label> Luogo di rilascio <input type="text" name="where" class="data" placeholder="Sii più preciso possibile"></label>
          <select name ='zone' class='hidden'>
          </select>
          <?php if(isset ($message['where'])): ?>
              <p id= "where" class="adv error"><?php echo e($message['where']); ?></p>
          <?php else: ?>
              <p id= "where" class="adv"></p>
          <?php endif; ?>

          <input id="button" type ="button" name ="button" value="Rilascia" >   
        </form>    
    </section> 
    <section class = "modal-page hidden">
    <form id="form-modal-view" >
    <img src="<?php echo e(url('./images/exit.png')); ?>" id = "exit" class="hidden">
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
<?php /**PATH /opt/lampp/htdocs/HW2/resources/views/insertbook.blade.php ENDPATH**/ ?>