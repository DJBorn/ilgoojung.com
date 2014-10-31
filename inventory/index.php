<html lang="en">
  <head>
    <link href='http://fonts.googleapis.com/css?family=Anton|Changa+One|Rubik+One' rel='stylesheet' type='text/css'>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
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
				skipSetup: true
		});
				// open deluxema once shadowbox has finished
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
		<?php include "../global_elements/analyticstracking.php"; ?>
		<?php navigation_bar("inventory"); ?>
		<div id="content_container">
			<div id="content_background">
				<div id="content">
					<div class="pixel_font">
						<span style="padding-left: 50px"></span>
						This is my inventory where I keep my list of projects. Check them out.
					</div><br/>
					<div class="boldpixel_font">
						Deluxema
					</div>
					<div class="pixel_font">
						<span style="padding-left: 50px"></span>
							Deluxema is a 2D game for desktop I made using Phaser and Javascript. Best performance
							on Google Chrome. I designed the sprites using Gimp and GraphicsGale.<br/>
						<span style="padding-left: 50px"></span>
							There isn't much of a back story to it but it's about a guy named Ace defending this woman trapped 
						inside a mirror. Go ahead and try it out!<br/>
						<span style="padding-left: 50px"></span>
							Oh and hey, if you find a bug or issue, feel free to let me know at idjung4@gmail.com I appreciate it! (:
					</div><br/>
					<div style="text-align: center;">
						<a class="play_deluxema triforce_font" onclick="load_deluxema();" rel="shadowbox">Play</a>
					</div>
				</div>
			</div>
		</div>
    <div id="footer">
			<?php footer_links();?>
      Copyright 2014 &#169 Ilgoo Jung
    </div>
  </body>
</html>




