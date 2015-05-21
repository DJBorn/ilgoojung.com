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
	<script type="text/javascript" src="../javascript/bird.js"></script>						<!-- birds -->
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
		<?php bird(); ?>
		<?php include "../global_elements/analyticstracking.php"; ?>
		<?php navigation_bar("inventory"); ?>
		<div id="content_container">
			<div id="content_background">
				<div id="content">
					<div class="pixel_font">
						<span style="padding-left: 50px"></span>
						This is my inventory where I keep my list of projects. Check them out. If you want to see some source code, visit my <a style="text-decoration: none" href="https://github.com/DJBorn">Github</a>
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
						The gameboy-like sound effects were created using Bfxr, a tool for creating sounds using the basic waveforms. The music was created
						using FL Studio using Chiptune like sounds.<br/>
						<span style="padding-left: 50px"></span>
							There isn't much of a back story to it but it's about a guy named Ace defending this woman trapped 
						inside a mirror. Go ahead and try it out!<br/>
						<span style="padding-left: 50px"></span>
							Oh and hey, if you find a bug or issue, feel free to let me know at idjung4@gmail.com I appreciate it! (:
					</div><br/>
					<div style="text-align: center;">
						<?php
							/* Detect mobile users and don't let them play Deluxema */
							$useragent=$_SERVER['HTTP_USER_AGENT'];
							if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)
							|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|
							series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||
							preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)
							|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi
							|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)
							|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit
							|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro
							|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)
							|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef
							|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)
							\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)
							|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa
							(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)
							|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)
							|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )
							|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
							{
								print('<div class="pixel_font" style="color:red">Oh no! Looks like you\'re on mobile :/ <br/>Get on your desktop if you want to try Deluxema!</div>');
							}
							else
							{
								print('<a class="play_deluxema triforce_font" onclick="load_deluxema();" rel="shadowbox">Play Deluxema</a>');
							}
						?>
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




