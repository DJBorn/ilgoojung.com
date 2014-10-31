
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

// Pointer animation
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

// fade out the content on page change
$(document).ready(function() {
	$(".navlink").click(function() {
		var that = this;
		$("#content").animate({opacity: "0.0"});
		$("#footer").animate({opacity: "0.0"});
		$("#content").promise().done(function() {
			$("#content_background").hide("blind");
			$("#content_background").promise().done(function() {
				window.location.href = $(that).attr('rel');
			});
		});
	});
});

// fade in content on page load
$(document).ready(function(){
	$('#content_background').hide().show("blind");
	$('#content').hide();
	$('#footer').hide();
	$('#content_background').promise().done(function() {
		$('#content').fadeIn();
		$('#footer').fadeIn();
	});
});
