<!doctype html>  

<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Ezio's Ristaurante</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!--  Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Place favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">


  <!-- CSS : implied media="all" -->
  <link rel="stylesheet" href="css/style.css?v=2">

  <!-- Uncomment if you are specifically targeting less enabled mobile browsers
  <link rel="stylesheet" media="handheld" href="css/handheld.css?v=2">  -->
 
  <!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
  <script src="js/libs/modernizr-1.6.min.js"></script>

</head>

<body>

  <div id="container">
    <header>
        <h1 class="ir">Ezio's Ristorante - Website In Progress.</h1>
        <img id="logo" src="images/logo_trans.png" alt="Ezio's">
        <h2>Tuesday through Sunday</h2>
        <h2>7am - 2pm</h2>
        <div id="alert">
            <p style="position:absolute; margin-bottom:10px; color:#000; text-shadow:0 0 3px #333">We're Now OPEN!<br></p>
            <img src="images/map.gif" alt="Google Map" id="map">
            <p style="margin-top:80px; clear:left">17 Wendell Ave. Ext. <br>
                Pittsfield, MA.
            </p>
<!--            <p style="clear:both;">We hope to be open shortly after the holidays... check back soon for more information.</p>-->
        </div>
    </header>
    
    <div id="main">
        <div id="temp">
            413-344-4260
            check back soon for some pictures and our menu.
        </div>
    </div>
    
    <footer>

    </footer>
  </div> <!--! end of #container -->

<?php
if ($_SERVER['HTTP_HOST'] == 'localhost' || strstr($_SERVER['HTTP_HOST'], '192.168.2')) {
  echo('<script type="text/javascript" src="js/libs/jquery-1.4.4.min.js"></script>');
} else {
  echo('<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>');
}
?>

  <!-- scripts concatenated and minified via ant build script-->
  <script src="js/plugins.js"></script>
  <script src="js/script.js"></script>
  <!-- end concatenated and minified scripts-->
  
  
  <!--[if lt IE 7 ]>
    <script src="js/libs/dd_belatedpng.js"></script>
    <script> DD_belatedPNG.fix('img, .png_bg'); //fix any <img> or .png_bg background-images </script>
  <![endif]-->

  <script>
   var _gaq = [['_setAccount', 'UA-7477439-8'], ['_trackPageview']];
   (function(d, t) {
    var g = d.createElement(t),
        s = d.getElementsByTagName(t)[0];
    g.async = true;
    g.src = ('https:' == location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g, s);
   })(document, 'script');
  </script>
  
</body>
</html>