$(document).ready(function(){

  Sprite = new Image(143,10800);
  Sprite.src = "../img/sprite.png";

  var random = Math.floor(Math.random() * 2) + 1;

  $(".content").html('' +
    '<h2 class="title">Online Kingsen</h2>' +
    '<p class="name">Click on the card to start</p>' +
    '<p class="sprite deck-' + random + '"></p>' +
    '<p class="description">Click on the card for a random new card.</p>'
  );

  $(".content").fadeIn('fast');

  $('.content').on("click", function(){
    $.get('random.php', function(data){
      $('.content').html(data).show();
    });
  });
});
