<html lang="en">
  <head>
    <link href='http://fonts.googleapis.com/css?family=Anton|Changa+One|Rubik+One' rel='stylesheet' type='text/css'>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <title>Daniel Jung - Inventory</title>
    <meta charset="utf-8"/>
    <link type="text/css" href="../css/djstyle.css" rel="stylesheet" type="tet/css"/>
	<script type="text/javascript" src="../javascript/djs.js"></script>
	<script type="text/javascript" src="../plug-ins/jquery.animateSprite.min.js"></script>
	<script src="../plug-ins/pixi.js-master/bin/pixi.dev.js"></script>
	<link rel="stylesheet" type="text/css" href="../plug-ins/shadowbox-3.0.3/shadowbox.css">
	<script type="text/javascript" src="../plug-ins/shadowbox-3.0.3/shadowbox.js"></script>
	<script src="../plug-ins/phaser/build/phaser.min.js"></script>
	<script type="text/javascript" src="../Web-Deluxema/game_state.js"></script>
	<script type="text/javascript" src="../Web-Deluxema/hud.js"></script>
	<script type="text/javascript" src="../Web-Deluxema/explosion.js"></script>
	<script type="text/javascript" src="../Web-Deluxema/missile.js"></script>
	<script type="text/javascript" src="../Web-Deluxema/mirror.js"></script>
	<script type="text/javascript" src="../Web-Deluxema/level.js"></script>
	<script type="text/javascript" src="../Web-Deluxema/robot.js"></script>
	<script type="text/javascript" src="../Web-Deluxema/ace.js"></script>
	<script type="text/javascript" src="../Web-Deluxema/deluxema.js"></script>
	<script type="text/javascript">
	function load_deluxema() { 
	Shadowbox.init({
			// let's skip the automatic setup because we don't have any
			// properly configured link elements on the page
			skipSetup: true
	});
			// open a welcome message as soon as the window loads
			Shadowbox.open({
					content:    '<div id="stage"></div>',
					player:     "html",
					title:      "<div class=\"pixel_font\">Deluxema</div>",
					height:     400,
					width:      1000,
					options: {modal: true, enableKeys: false, onFinish: deluxema, onClose: close_deluxema}
			});
	};
	</script>
    <?php include "../global_elements/global_scripts.php"; ?>
  </head>
  <body>
	<?php navigation_bar("inventory"); ?>
    <div id="content">
			<div class="pixel_font">
				This is my inventory where I keep my list of projects. Check them out.
			</div><br/>
			<div class="boldpixel_font">
				Deluxema
			</div>
			<div class="pixel_font">
				<span style="padding-left: 50px"></span>
				Deluxema is a 2D game I made using Phaser and Javascript. Go ahead and try it out!
			</div><br/>
			<a class="play_deluxema triforce_font" onclick="load_deluxema();" rel="shadowbox">Play</a>
    </div>
    <div id="footer">
      Copyright 2014 &#169 Ilgoo Jung
    </div>
  </body>
</html>




