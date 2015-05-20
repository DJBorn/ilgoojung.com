
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

// Create birds
$(document).ready(function() {
	//draw();
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

// Resize window on load
$(document).ready(function(){
	if($(window).width() < 1024)
		document.getElementById("content_container").style.width = "98%";
	else
		document.getElementById("content_container").style.width = "60%";

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

// reset videos on slideshow change
$(document).ready(function(){
	$(".jssora03l").click(function() {
		$("#ds_demo1").get(0).pause();
		$("#ds_demo1").get(0).currentTime = 0;
		$("#ds_demo2").get(0).pause();
		$("#ds_demo2").get(0).currentTime = 0;
		$("#ds_demo3").get(0).pause();
		$("#ds_demo3").get(0).currentTime = 0;
	});
});

// change inner content size when window is too small
$(window).resize(function() {
	if($(this).width() < 1024)
		document.getElementById("content_container").style.width = "98%";
	else
		document.getElementById("content_container").style.width = "60%";
});




