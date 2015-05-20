function draw() {
  var canvas = document.getElementById("bird");
  if (canvas.getContext) {
	var ctx = canvas.getContext("2d");

	ctx.fillStyle = "rgb(200,0,0)";
	ctx.fillRect (1, 30, 1, 1);

  }
}