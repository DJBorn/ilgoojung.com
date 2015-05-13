<html lang="en">
  <head>
    <link href='http://fonts.googleapis.com/css?family=Anton|Changa+One|Rubik+One' rel='stylesheet' type='text/css'>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <title>Daniel Jung - Inventory</title>
    <meta charset="utf-8"/>
    <link type="text/css" href="../css/djstyle.css" rel="stylesheet" type="tet/css"/>			<!-- Global css file -->
	<script type="text/javascript" src="../javascript/djs.js"></script>							<!-- Global javascript functions-->
	<script type="text/javascript" src="../plug-ins/jquery.animateSprite.min.js"></script>		<!-- Sprite animations  -->
	<script type="text/javascript" src="../javascript/treasure.js"></script>					<!-- treasure animation -->
	<script src="../plug-ins/pixi.js-master/bin/pixi.dev.js"></script>							<!-- pixi -->
	<link rel="stylesheet" type="text/css" href="../plug-ins/shadowbox-3.0.3/shadowbox.css">	<!-- pop up shadowbox stylesheet -->
	<script type="text/javascript" src="../plug-ins/shadowbox-3.0.3/shadowbox.js"></script>		<!-- pop up shadowbox scripts -->
	<script src="../plug-ins/phaser.min.js"></script>								<!-- phaser -->
    <link type="text/css" href="../css/jssor.css" rel="stylesheet" type="tet/css"/>				<!-- jssor slideshow css file -->
	<script type="text/javascript" src="../plug-ins/jssor.slider.mini.js"></script>				<!-- jssor slideshow -->
	
	<script type="text/javascript" src="../Web-Deluxema/game_state.js"></script>
	<script type="text/javascript" src="../Web-Deluxema/hud.js"></script>
	<script type="text/javascript" src="../Web-Deluxema/soundtrack.js"></script>
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
	<script>
	<!-- slideshow set up -->
		jQuery(document).ready(function ($) {
			var options = {
				$FillMode: 5,
				$DragOrientation: 0,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
				$ArrowNavigatorOptions: {                      	 	//[Optional] Options to specify and enable arrow navigator or not
					$Class: $JssorArrowNavigator$,             		//[Requried] Class to create arrow navigator instance
					$ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
					$AutoCenter: 0,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
					$Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
				}
			};

			var jssor_slider1 = new $JssorSlider$("slider1_container", options);
			var jssor_slider2 = new $JssorSlider$("slider2_container", options);
		});
	</script>
	<?php include "../global_elements/global_scripts.php"; ?>
	<?php include "../global_elements/footer.php"; ?>
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
					<!-- Deluxema -->
					<div class="boldpixel_font">
						Deluxema
					</div>
					<div class="pixel_font">
						<span style="padding-left: 50px"></span>
							Deluxema is a 2D game for desktop I made using Phaser and Javascript. Best performance on Google Chrome. 
						The game play is controlled through several different states that depend on user input. All classes are initially loaded
						and the player is thrown into the initial Menu State, then once the user presses the enter key, it shifts into the animation
						sequence that transitions into the game itself. Once the animation sequence completes, the player is then in the main game state
						where they gain full control over the main character. This main game state dynamically changes as the game progresses; the more
						points the player gets, the more enemies there are. Finally, once the player is overwhelmed, they are transitioned into the 
						game over state where all variables are reset and they are taken back to the menu state.<br/>
						<span style="padding-left: 50px"></span>
							As for the artwork, I designed the sprites independently using Gimp and GraphicsGale, an open source image editing software.
						The gameboy-like sound effects were created using Bfxr, a tool for creating sounds using the basic waveforms.<br/>
						<span style="padding-left: 50px"></span>
							There isn't much of a back story to it but it's about a guy named Ace defending this woman trapped 
						inside a mirror. Go ahead and try it out!<br/>
						<span style="padding-left: 50px"></span>
							Oh and hey, if you find a bug or issue, feel free to let me know at idjung4@gmail.com I appreciate it! (:
					</div><br/>
					<div style="text-align: center;">
						<a class="play_deluxema triforce_font" onclick="load_deluxema();" rel="shadowbox">Play</a>
					</div><br/>
					<!-- Deluxema End -->
					<!-- Deluxema Vanilla -->
					<div class="boldpixel_font">
						Deluxema Vanilla
					</div>
					<div class="pixel_font">
						<span style="padding-left: 50px"></span>
							Deluxema was in development initially for the windows PC using C++ and the gaming engine Dark GDK. This was
						the first gaming framework I was familiar with. The framework itself was limiting and I found it challenging to
						handle most physics and animations without the use of predefined helper methods from the framework itself. I was
						further discouraged to fully complete this version because people would not be able to play it without owning a 
						windows PC and downloading all the files necessary to run the game. Instead I used what resources I already had
						and continued development for the web, where it was open to everyone that can run a browser.<br/>
						<span style="padding-left: 50px"></span>
							Developing Deluxema Vanilla allowed me to program games with minimal resources and learn things like collision
						detection, animations, game physics/mechanics and general game play design. I was also able to refine my Object Oriented
						skills through this project.<br/>
					</div><br/>
					<!-- Deluxema Vanilla End -->
					<!-- DreamScheme -->
					<div class="boldpixel_font">
						DreamScheme
					</div>
					<div class="pixel_font">
						<span style="padding-left: 50px"></span>
							DreamScheme is a 2D game I created with a close friend in High School. It was created using C++ and
						Dark GDK. This was the first time I was exposed to state programming, which introduced me to how many games
						are programmed. It's a bit unrefined (we had high hopes back then) but it was the first graphical game I had ever 
						created and I'm glad I was able to work on it.<br/>
						<span style="padding-left: 50px"></span>
							As for the artwork, we did several palette swaps for the heroes and monsters, and used sprites from the popular
						Mario series by Nintendo to create custom levels.<br/>
					</div><br/>
					<!-- Jssor Slider Begin -->
					<div id="slider1_container" style="margin: auto;position: relative; top: 0px; left: 0px; width: 600px;
						height: 450px; ">

						<!-- Slides Container -->
						<div u="slides" style="cursor: auto; position: absolute; left: 0px; top: 0px; width: 600px; height: 450px;
							overflow: hidden;">
							<div><img u="image" src="../images/DreamScheme_Gallery/screenshot1.png" /></div>
							<div><img u="image" src="../images/DreamScheme_Gallery/screenshot2.png" /></div>
							<div><img u="image" src="../images/DreamScheme_Gallery/screenshot3.png" /></div>
							<div><img u="image" src="../images/DreamScheme_Gallery/Hero Running.bmp" /></div>
							<div><img u="image" src="../images/DreamScheme_Gallery/Firebolt Explosion.bmp" /></div>
							<div><img u="image" src="../images/DreamScheme_Gallery/Mouse With Borders.bmp" /></div>
							<div>
								<video id="ds_demo1" width="100%" style="margin-top:0px;" controls>
									<source src="../videos/DreamScheme_Demo_1.mp4" type="video/mp4">
									Your browser does not support the video tag.
								</video>
							</div>
							<div>
								<video id="ds_demo2" width="100%" style="margin-top:60px;" controls>
									<source src="../videos/DreamScheme_Demo_2.mp4" type="video/mp4">
									Your browser does not support the video tag.
								</video>
							</div>
						</div>
						
						<!--#region Arrow Navigator Skin Begin -->
						<!-- Arrow Left -->
						<span u="arrowleft" class="jssora03l" style="top: 198px; left: 8px;">
						</span>
						<!-- Arrow Right -->
						<span u="arrowright" class="jssora03r" style="top: 198px; right: 8px;">
						</span>
						<!--#endregion Arrow Navigator Skin End -->
					</div><br/>
					<!-- Jssor Slider End -->
					<!-- DreamScheme End -->
					<!-- Hearts -->
					<div class="boldpixel_font">
						Hearts
					</div>
					<div class="pixel_font">
						<span style="padding-left: 50px"></span>
							A text-based card game that consists of Human/AI players. This was created in my Object-Oriented Programming course along with a partner.
						We treated many of components of the game as objects; cards, a card pile which consists of cards, a deck which is a cardpile consisting of 
						52 cards as well as 'deck-like' behaviour (card shuffling), and different types of players that hold card piles and handle their moves differently. 
						The driver controls the main game by creating and using these objects.<br/>
						<span style="padding-left: 50px"></span>
							This was not exactly the most graphical game but it did give me the object-oriented technique when creating my future games, including Deluxema.<br/>
					</div><br/>
					<!-- Hearts End -->
					<!-- XMario -->
					<div class="boldpixel_font">
						XMario
					</div>
					<div class="pixel_font">
						<span style="padding-left: 50px"></span>
							This is a 2D platformer I made for my User Interface class. This was made using C++ and X Windows, a basic framework for the Unix systems for creating GUI interfaces.
						I wanted to recreate the original 8-bit Mario game, so I designed my custom level by using a binary 2D array which determines if a block is there or not. I also
						drew Mario using a 2D array with colour codes corresponding to each pixel. I made separate arrays for each frame in his running/death animation. Then I employed
						simple collision detection, gravity, and a jump for the basic Mario-like platformer.<br/>
						<span style="padding-left: 50px"></span>
							This project allowed me to use a basic framework for drawing to create custom sprites and environments.<br/>
					</div><br/>
					<!-- Jssor Slider Begin -->
					<div id="slider2_container" style="margin: auto;position: relative; top: 0px; left: 0px; width: 600px;
						height: 450px; ">

						<!-- Slides Container -->
						<div u="slides" style="cursor: auto; position: absolute; left: 0px; top: 0px; width: 600px; height: 450px;
							overflow: hidden;">
							<div><img u="image" src="../images/XMario_Gallery/screenshot1.png" /></div>
							<div><img u="image" src="../images/XMario_Gallery/screenshot2.png" /></div>
							<div><img u="image" src="../images/XMario_Gallery/screenshot3.png" /></div>
							<div><img u="image" src="../images/XMario_Gallery/screenshot4.png" /></div>
							<div><img u="image" src="../images/XMario_Gallery/screenshot5.png" /></div>
						</div>
						
						<!--#region Arrow Navigator Skin Begin -->
						<!-- Arrow Left -->
						<span u="arrowleft" class="jssora03l" style="top: 198px; left: 8px;">
						</span>
						<!-- Arrow Right -->
						<span u="arrowright" class="jssora03r" style="top: 198px; right: 8px;">
						</span>
						<!--#endregion Arrow Navigator Skin End -->
					</div><br/>
					<!-- Jssor Slider End -->
					<!-- XMario End -->
				</div>
			</div>
		</div>
    <div id="footer">
			<?php footer_links();?>
			<?php footer(); ?>
    </div>
  </body>
</html>




