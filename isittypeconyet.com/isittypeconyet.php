<?php
  // Set the timezone:
  date_default_timezone_set('America/Chicago');
?>
<!-- In the <head>: -->
<meta property="og:title" content="Is It TypeCon Yet?">
<meta property="og:type" content="website">
<meta property="og:url" content="http://isittypeconyet.com/">
<meta property="og:image" content="http://isittypeconyet.com/images/typecon.png">
<meta property="og:site_name" content="Is It TypeCon Yet?">
<meta property="og:description" content="You want to know whether TypeCon is happening. This will tell you.">
<!-- Immediately after the opening <body>: -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- Where you want the button to show up: -->
<div class="fb-like" data-href="http://isittypeconyet.com/" data-send="false" data-width="320" data-show-faces="false"></div>
