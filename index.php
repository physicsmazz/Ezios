<!doctype html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en" class="no-js"> <!--<![endif]-->
<head>
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Ezio's Ristaurante</title>
    <meta name="description" content="Owners Lisa and Angela Roughley always had a dream of opening a Restaurant, their dream finally became
                    somewhat of a reality in 2009, when a restaurant was available for lease in Lanesborough, Ma. Lisa and
                    Angela were planning on naming the restaurant, 'La Famiglia' representing the closeness of their
                    tight-knit Italian family. But, on September 5, Lisa's father, and Angela's grandfather, Emilio Ezio
                    Mazzantini passed away. He was only two weeks away from his ninetieth birthday. The family suggested
                    that Lisa re-name the restaurant for her father. The family mutually agreed on the name Ezio's
                    Ristorante, and the rest is history. Ezio's memory and spirit live on at the restaurant, and he know
                    that he would be proud to have such a wonderful establishment named after him. He was a great man and
                    will always be remembered.">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <link rel="stylesheet" href="css/style.css?v=2">
    <script src="js/libs/modernizr.min.js"></script>
</head>

<body>
<div id="container">
    <header>
        <h1 id="logo" class="ir">Ezio's Ristorante - Website In Progress.</h1>

        <h2>Wednesday through Sunday<br>7am - 2pm<br>413-344-4260</h2>
        <nav class="boxShadow">
            <ul>
                <li><a id="homeLink" href="index.php">Home</a></li>
                <li><a id="menuLink" href="menu.php">Menu</a></li>
                <li><a id="contactLink" href="contact.php">Contact Us</a></li>
                <li><a target="_blank"
                       href="http://maps.google.com/maps/place?q=Ezios+17+wendell+ave+ext+01201&hl=en&cid=14628378324444132510">Find
                    Us</a></li>
            </ul>
        </nav>
    </header>

    <div id="main">
        <div id="slider" class="theme-default boxShadow">
            <img src="images/slider/slider0.jpg" alt="Food Images">
            <img src="images/slider/slider1.jpg" alt="Food Images">
            <img src="images/slider/slider2.jpg" alt="Food Images">
            <img src="images/slider/slider3.jpg" alt="Food Images">
            <img src="images/slider/slider4.jpg" alt="Food Images">
            <img src="images/slider/slider5.jpg" alt="Food Images">
        </div>
        <div id="text" class="boxShadow">
            <div id="homeText">
                <p>
                    Owners Lisa and Angela Roughley always had a dream of opening a Restaurant, their dream finally
                    became
                    somewhat of a reality in 2009, when a restaurant was available for lease in Lanesborough, Ma. Lisa
                    and
                    Angela were planning on naming the restaurant, "La Famiglia" representing the closeness of their
                    tight-knit Italian family. But, on September 5, Lisa's father, and Angela's grandfather, Emilio Ezio
                    Mazzantini passed away. He was only two weeks away from his ninetieth birthday. The family suggested
                    that Lisa re-name the restaurant for her father. The family mutually agreed on the name Ezio's
                    Ristorante, and the rest is history. Ezio's memory and spirit live on at the restaurant, and he know
                    that he would be proud to have such a wonderful establishment named after him. He was a great man
                    and
                    will always be remembered.
                </p>

                <h3>Ezio's is now located at 17 Wendell Ave. Ext. Pittsfield, MA</h3>
            </div>
            <form id="contactForm" action="sendMail.php" method="post" class="clearfix">
                <div class="left">
                    <label for="name">Name: </label>
                    <input type="text" name="name" id="name">
                    <br>
                    <label for="email">Email: </label>
                    <input type="text" name="email" id="email">
                </div>
                <div class="right">
                    <label for="message">Message: </label>
                    <textarea name="message" id="message" cols="30" rows="10"></textarea>
                </div>
                <button id="sendBtn">Send Message</button>
            </form>
        </div>

        <footer>

        </footer>
    </div>
    <!--! end of #container -->

    <?php
    if ($_SERVER['HTTP_HOST'] == 'localhost' || strstr($_SERVER['HTTP_HOST'], '192.168.2')) {
        echo('<script type="text/javascript" src="js/libs/jquery.min.js?v=1.71"></script>');
    } else {
        echo('<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>');
    }
    ?>

    <!-- scripts concatenated and minified via ant build script-->
    <script src="js/libs/jquery.nivo.slider.pack.js"></script>
    <script type="text/javascript">
        $(function () {
            $('#slider').nivoSlider({
                controlNav:false
            });
            $('#homeLink').click(function(){
                $('#contactForm').slideUp();
                $('#homeText').slideDown();
                return false;
            });
            $('#menuLink').click(function () {
                alert('So, sorry. We have\'t had a change to put the menu online yet.');
                return false;
            });
            $('#contactLink').click(function () {
                $('#homeText').slideUp();
                $('#contactForm').slideDown();
                return false;
            });

            $('#contactForm').submit(function(){
                console.log('submitting');
                var data = $('#contactForm').serialize();
                dfd = $.ajax({
                    url: 'sendMail.php',
                    data: data,
                    dataType: 'json',
                    type: 'post'
                });
                dfd.done(function(json){
                    if(json.result == 'ERROR'){
                        alert('There was a problem sending your message.');
                    }else{
                        alert('You message was sent.');
                        $('#sendBtn').text('Send Message');
                        $('#contactForm').slideUp();
                        $('#homeText').slideDown();
                    }
                    });

                    dfd.fail(function(){
                        alert('There was a problem connecting.');
                    });

                return false;
            });



        });

    </script>
    <!-- end concatenated and minified scripts-->
    <?php include_once 'includes/analytics.inc.php'; ?>

</body>
</html>