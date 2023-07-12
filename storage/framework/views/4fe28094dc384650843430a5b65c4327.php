<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel = "stylesheet" href = "<?php echo e(url ('CSS/header.css')); ?>"/>
    <link rel = "stylesheet" href = "<?php echo e(url ('CSS/homepage.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Bree+Serif">
    <meta name = "viewport" content = "width = device-width, initial-scale=1">
    <title> OurBooks</title>
  </head>

  <body>
    <header>
      <div id="logo-container">
      </div>
      <nav id="home-page-navbar">
        <a id="one" href="<?php echo e(url('login')); ?>"> Login </a>
        <a id="two" href="<?php echo e(url('subscribe')); ?>"> Registrati</a>
      </nav>
    </header>
  
    <section>
      <div id="overlay"></div>
      <h1 id="title">Una nuova idea di biblioteca</h1>
      <h1> Scopri come condividere i tuoi libri e trovarne di nuovi</h1>
    </section>


  </body>
</html>
<?php /**PATH /opt/lampp/htdocs/HW2/resources/views/homepage.blade.php ENDPATH**/ ?>