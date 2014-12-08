<!DOCTYPE HTML>
<html http-equiv="Content-Type" content="text/html; charset=utf-8">
  <head>
    <link rel="stylesheet" href="style.css"/>
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <link rel="icon" href="img/favicon.ico" type="image/x-icon">
  <title>Online kingsen</title>
</head>
  <body>
    <div id="container">
      <div class="content"></div>
    </div>
  </body>
</html>
<?php
  $iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
  $android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
  $palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
  $berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
  $ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");

  if ($iphone || $android || $palmpre || $ipod || $berry) {
    echo '<meta id="testViewport" name="viewport" content="width=device-width; height=device-height initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />';
    echo '<style>html{-moz-text-size-adjust:100%;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;-text-size-adjust:100%;}#container,.content{width:100%;}</style>';
  }
?>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script>
$(document).ready(function(){
  Sprite = new Image(143,10800);
  Sprite.src = "img/sprite.png";

	var random = Math.floor(Math.random() * 2) + 1;
	$(".content").html('<p class="title">Online Kingsen</p><p class="name">Klik om te beginnen</p><p class="sprite deck-' + random + '"></p><p class="description">Klik op de kaart voor een willekeurig nieuwe kaart</p>');
	$(".content").fadeIn('fast');

	$('.content').on("click", function(){
		$.get('random.php', function(data){
			$('.content').html(data).show();
		});
	});
});
</script>
