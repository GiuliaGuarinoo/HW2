<!DOCTYPE html>

<html>
  <head>
    <script>
      const BASE_URL = "<?php echo e(url('/')); ?>/";
    </script>
    <meta charset="utf-8">
    <link rel = "stylesheet" href = "<?php echo e(url('CSS/header.css')); ?>"/>
    <link rel = "stylesheet" href = "<?php echo e(url('CSS/subscribe.css')); ?>"/>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Bree+Serif">
    <script src = "<?php echo e(url('JS/subscribe.js')); ?>" defer = "true"></script>
    <meta name = "viewport" content = "width = device-width, initial-scale=1">
    <title> OurBooks - Subscribe</title>
  </head>

  <body>
    <header>      
      <div id="logo-container"> </div>
      <nav id="home-page-navbar">
        <a id="one" a href="<?php echo e(url('homepage')); ?>"> Home</a>
        <a id="two" a href="<?php echo e(url('login')); ?>"> Accedi </a>
      </nav>
    </header>
    
    <section>
      <?php if(isset ($ok_subscribe)): ?>
      <div id=overlay class = "overlay-index"></div>
      <?php else: ?>
      <div id=overlay></div>
      <?php endif; ?>
        <form id="subscribe-form" autocomplete="off" name="subscribe-form" method="post">
            <?php echo csrf_field(); ?>
            <?php if(isset ($ok_subscribe)): ?>
            <div id='submitok' class="submit-index"><p><?php echo e($ok_subscribe); ?><a href="<?php echo e(url('login')); ?>"> Accedi </a></p></div>
            <?php endif; ?>

            <label> Username <input type="text" name="username" maxlength="35" class="data" value ='<?php echo e(old("username")); ?>'></label> 
            <?php if(isset ($error['username'])): ?>
              <p id= "username" class="adv error"><?php echo e($error['username']); ?></p>
            <?php else: ?>
              <p id= "username" class="adv"></p> 
            <?php endif; ?> 
          
            <label> Nome<input type="text" name="nome" maxlength="35" class="data"value ='<?php echo e(old("nome")); ?>'></label>
            <?php if(isset ($error['name'])): ?>
              <p id= "name" class="adv error" ><?php echo e($error['name']); ?></p>
            <?php else: ?>
              <p id= "name" class="adv" > </p>
            <?php endif; ?>

            <label> Cognome<input type="text" name="cognome" maxlength="35" class="data"value ='<?php echo e(old("cognome")); ?>'></label>    
            <?php if(isset ($error['surname'])): ?>
              <p id= "surname" class="adv error"><?php echo e($error['surname']); ?></p>
            <?php else: ?>
              <p id= "surname" class="adv"></p>
            <?php endif; ?>

            <label> Email <input type="email" name="email" maxlength="35" class="data"value ='<?php echo e(old("email")); ?>'></label>
            <?php if(isset($error['email'])): ?>   
              <p id= "email" class="adv error"><?php echo e($error['email']); ?></p>
            <?php else: ?>
              <p id= "email" class="adv"></p>
            <?php endif; ?> 
            
            <label> Password <input type="password" name="password" maxlength="35" class="data"></label>
            <?php if(isset($error['password'])): ?>
              <p id= "password" class="adv error"><?php echo e($error['password']); ?></p>
            <?php else: ?> 
              <p id= "password" class="adv"></p>
            <?php endif; ?> 

            <label> Ripeti Password <input type="password" name="rpassword" maxlength="35" class="data"></label>
            <?php if(isset($error['rpassword'])): ?> 
              <p id= "rpassword" class="adv error"><?php echo e($error['rpassword']); ?></p>
            <?php else: ?>
              <p id= "rpassword" class="adv"></p>
            <?php endif; ?> 
            
            <div id="privacy-container">        
              <input type="checkbox" name="privacy"><span>Autorizzo l'uso dei miei dati personali secondo quanto stabilito dall'informativa privacy</span>
            </div>
            <?php if(isset($error['privacy'])): ?> 
              <p id="privacy" class="adv error"></p><?php echo e($error['privacy']); ?></p>
            <?php else: ?>
              <p id="privacy" class="adv"></p>
            <?php endif; ?> 

            <input id="sub" type ="submit" name ="ok" value="Iscriviti" >
        </form>
    </section>
  </body>
</html>
<?php /**PATH /opt/lampp/htdocs/HW2/resources/views/subscribe.blade.php ENDPATH**/ ?>