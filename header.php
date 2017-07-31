<?php $GLOBALS['local_URL'] = dirname($_SERVER['PHP_SELF']); ?>





<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <title>Homepage - Steven Jackson CV - 2017</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" href="apple-touch-icon.png">


  <link rel="stylesheet" href="./css/bundle.min.css">
  <!--  NOTE: Development Stylesheet! DELETE AFTER DEVELOPMENT-->
  <link rel="stylesheet" href="./css/styles.min.css">
  <link rel="stylesheet" href="./css/animate.css">
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
  <script src="./js/vendor/modernizr-2.8.3-respond-1.4.2.min.js" async></script>
</head>
<body>

  <header>
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top navbar-fixed-top">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Steven Jackson CV 2017</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li <?php if(basename($_SERVER['REQUEST_URI']) == 'php_cv'){ ?> class="active" <?php } ?>><a href="<?php echo $GLOBALS['local_URL'];?>/">Home</a></li>
              <li <?php if(basename($_SERVER['REQUEST_URI']) == 'about-me.php'){ ?> class="active" <?php } ?>><a href="<?php echo $GLOBALS['local_URL']; ?>/about-me.php">About</a></li>
               <li <?php if(basename($_SERVER['REQUEST_URI']) == 'coding-experience.php'){ ?> class="active" <?php }?>><a href="<?php echo $GLOBALS['local_URL']; ?>/coding-experience.php">Coding Experience</a></li>
              <li <?php if(basename($_SERVER['REQUEST_URI']) == 'contact-me.php'){ ?> class="active" <?php } ?>><a href="<?php echo $GLOBALS['local_URL']; ?>/contact-me.php">Contact</a></li>
            </ul>
          </div>
        </nav>

      </div>
    </div>
