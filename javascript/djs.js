
$(document).ready(function() {
$(".navlink").hover(
  function(){
    $(".navpointer").animateSprite('restart');
    $(this).siblings(".navpointer").css('visibility', 'visible');
  },
  function() {
    $(".navpointer").animateSprite('stop');
    $(this).siblings(".navpointer").css('visibility', 'hidden');
  });
});

$(document).ready(function() {
  $(".active").css('color', 'yellow');
});

$(document).ready(function() {
	$(".navpointer").animateSprite({
		fps: 12,
		animations: {
			point: [0, 1, 2, 3, 4, 5, 6, 7, 6, 5, 4, 3, 2, 1]
		},
		loop: true,
	});
});

$(document).ready(function() {
	$('img').on('dragstart', function(event) { event.preventDefault(); });
});
