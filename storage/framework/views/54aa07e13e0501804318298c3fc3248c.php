<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel = "stylesheet" href = "<?php echo e(url('CSS/header.css')); ?>" />
    <link rel = "stylesheet" href = "<?php echo e(url ('CSS/homepage.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Bree+Serif">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap">
    <meta name = "viewport" content = "width = device-width, initial-scale=1">
    <title> OurBooks - Logout </title>
  </head>

  <body>
    <header>      
      <div id="logo-container"> </div>
      <nav id="home-page-navbar">
      <a id="one" a href="<?php echo e(url('login')); ?>"> Accedi</a>
      <a id="two" a href="<?php echo e(url('homepage')); ?>"> Home</a>
      </nav>
    </header>
    <section>
      <div id="overlay"></div>
        <h1 id="title">A presto
        <?php echo e($logout_user); ?>

        </h1>
    </section>
  </body>
</html>  <?php /**PATH /opt/lampp/htdocs/HW2/resources/views/logout.blade.php ENDPATH**/ ?>