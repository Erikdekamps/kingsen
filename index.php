<!DOCTYPE HTML>
<html http-equiv="Content-Type" content="text/html; charset=utf-8">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=1.0, minimum-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="An online version of the drinking game called Kingsen">
  <meta name="google-site-verification" content="iiV8BbQqGT1TgpJBq5sZjCTmiqj3SbC8zVIraPVp2UM"/>

  <link rel="stylesheet" href="assets/css/style.min.css"/>
  <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
  <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">
  <title>Online Kingsen</title>

  <script type="text/javascript">var switchTo5x=true;</script>
  <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
  <script type="text/javascript">stLight.options({publisher: "58675fc9-b8df-48e5-b744-74557261f681", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
</head>
<body>
<div id="container">
  <div class="content"></div>
  <span class='st_facebook_large' displayText='Facebook'></span>
  <span class='st_twitter_large' displayText='Tweet'></span>
  <span class='st_linkedin_large' displayText='LinkedIn'></span>
  <span class='st_email_large' displayText='Email'></span>
</div>
</body>
<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
<script>$(document).ready(function(){Sprite=new Image(143,10800);Sprite.src="../img/sprite.png";var e=Math.floor(Math.random()*2)+1;$(".content").html(""+'<h1 class="title">Online Kingsen</h1>'+'<h2 class="name">Click on the card to start</h2>'+'<p class="sprite deck-'+e+'"></p>'+'<p class="description">Click on the card for a random new card.</p>');$(".content").fadeIn("fast");$(".content").on("click",function(){$.get("random.php",function(e){$(".content").html(e).show()})})})</script>
<script>(function(e,t,n,r,i,s,o){e["GoogleAnalyticsObject"]=i;e[i]=e[i]||function(){(e[i].q=e[i].q||[]).push(arguments)},e[i].l=1*new Date;s=t.createElement(n),o=t.getElementsByTagName(n)[0];s.async=1;s.src=r;o.parentNode.insertBefore(s,o)})(window,document,"script","//www.google-analytics.com/analytics.js","ga");ga("create","UA-56144415-2","auto");ga("send","pageview")</script>
</html>
