
$(document).ready(function() {
$(".navlink").hover(
  function(){
    $(this).siblings(".navpointer").css('visibility', 'visible');
  },
  function() {
    $(this).siblings(".navpointer").css('visibility', 'hidden');
  });
});

$(document).ready(function() {
  $(".active").css('color', 'yellow');
});
