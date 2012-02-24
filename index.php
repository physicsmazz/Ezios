<!doctype html>

<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en" class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Ezio's Ristaurante</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <link rel="stylesheet" href="css/style.css?v=2">
    <script src="js/libs/modernizr-1.6.min.js"></script>
</head>

<body>
<div id="container">
    <header>
        <h1 id="logo" class="ir">Ezio's Ristorante - Website In Progress.</h1>
        <h2>Tuesday through Sunday<br>7am - 2pm</h2>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="menu.php">Menu</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="location.php">Find Us</a></li>
            </ul>
        </nav>
    </header>

    <div id="main">
        <div id="slider">
            Slider Images
        </div>
        <div id="text">
            <h3>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum
                tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas
                semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</h3>

        </div>

    </div>

    <footer>

    </footer>
</div>
<!--! end of #container -->

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
    var _gaq = [
        ['_setAccount', 'UA-7477439-8'],
        ['_trackPageview']
    ];
    (function (d, t) {
        var g = d.createElement(t),
                s = d.getElementsByTagName(t)[0];
        g.async = true;
        g.src = ('https:' == location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g, s);
    })(document, 'script');
</script>

</body>
</html>