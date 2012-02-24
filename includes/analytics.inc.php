<?php
if ($_SERVER['HTTP_HOST'] == 'localhost' || strstr($_SERVER['HTTP_HOST'],'192.168.2') || $_SERVER['HTTP_HOST'] == '127.0.0.1'){

}else{
?>
<script> // Change UA-XXXXX-X to be your site's ID
var _gaq=[['_setAccount','UA-7477439-8'],['_trackPageview']];
(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
<?php } ?>