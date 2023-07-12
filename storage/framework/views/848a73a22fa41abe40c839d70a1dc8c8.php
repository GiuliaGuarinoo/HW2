<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <link rel = "stylesheet" href = "<?php echo e(url ('CSS/header.css')); ?>" />
    <link rel = "stylesheet" href = "<?php echo e(url ('CSS/subscribe.css')); ?>" />
    <link rel = "stylesheet" href = "<?php echo e(url ('CSS/login.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Bree+Serif">
    <script src = "<?php echo e(url ('JS/login.js')); ?>" defer = "true"></script>
    <meta name = "viewport" content = "width = device-width, initial-scale=1">
    <title> OurBooks - Login</title>
  </head>

  <body>
    <header>      
      <div id="logo-container"> </div>
      <nav id="home-page-navbar">
        <a id="one" a href="<?php echo e(url ('homepage')); ?>"> Home </a>
        <a id="two" a href="<?php echo e(url ('subscribe')); ?>"> Registrati </a>
      </nav>
    </header>
    
    <section>

      <div id=overlay></div>

        <form id="subscribe-form" autocomplete="off" name="subscribe-form" method="post">
          <?php echo csrf_field(); ?>
          <label> Username <input type="text" name="username" maxlength="35" class="data"></label>
            <?php if(isset ($error['username'])): ?>
            <p id= "username" class="adv error"><?php echo e($error['username']); ?></p>
            <?php else: ?>
            <p id= "username" class="adv"></p> 
            <?php endif; ?>    
          <label> Password <input type="password" name="password" maxlength="35" class="data"> </label>
            <?php if(isset ($error['password'])): ?>
            <p id= "password" class="adv error"><?php echo e($error['password']); ?></p>
            <?php else: ?>
            <p id= "password" class="adv"></p>
            <?php endif; ?> 
          <label> <input id="sub" type ="submit" name ="ok" value="Accedi" > </label>
        </form>
    </section>
  </body>
</html><?php /**PATH /opt/lampp/htdocs/HW2/resources/views/login.blade.php ENDPATH**/ ?>