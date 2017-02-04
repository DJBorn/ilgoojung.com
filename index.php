<html lang="en">
  <head>
    <link href='http://fonts.googleapis.com/css?family=Anton|Changa+One|Rubik+One' rel='stylesheet' type='text/css'>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <title>Daniel Jung</title>
    <meta charset="utf-8"/>
    <link type="text/css" href="./css/djstyle.css" rel="stylesheet" type="tet/css"/>
		<script type="text/javascript" src="./javascript/djs.js"></script>
		<script type="text/javascript" src="./plug-ins/jquery.animateSprite.min.js"></script>
		<script type="text/javascript" src="./plug-ins/blocksjs-0.5.12.min.js"></script>
		<script type="text/javascript" src="./javascript/treasure.js"></script>
		<script type="text/javascript" src="./javascript/bird.js"></script>
    <?php include "./global_elements/global_scripts.php"; ?>
	<?php include "./global_elements/footer.php"; ?>
  </head>
  <body>
		<?php bird(); ?>
		<?php include "./global_elements/analyticstracking.php"; ?>
		<?php navigation_bar("home"); ?>
		<div id="content_container">
			<div id="content_background">
				<div id="content">
					<div id="home">
						<div class="pixel_font">
						<img src="images/me.png" style="float:right"/>
							Hey, thanks for visiting my site! Here you can learn a bit about me. 
							My name's Daniel Jung and I'm a Software Developer. I'm also a student at
							the University of Waterloo pursuing a Bachelor of Computer Science graduating in August of 2017.<br/><br/>
							My passion for programming comes from the satisfaction of knowing that technology will help people's lives in one way or another.
							I like to envision what I want to create and turn it into life by using what I know about programming and what
							I have learned working with others.<br><br>
							I believe one of the most important skills in software development is empathy. I put so much effort in trying to understand how
							others feel and, in a technical sense, how they feel when using software. By putting myself in other people's shoes and
							constantly asking questions, I am able to accurately design and create what others want. <br/><br/>
							Currently I am looking to apply my skills at a company that will make people's lives better. Visit my other social media pages by
							searching for treasure below, or contact me directly idjung4@gmail.com or 226-929-8580.
						</div>
					</div>
				</div>
			</div>
    </div>
    <div id="footer">
			<?php footer_links();?>
			<?php footer(); ?>
    </div>
  </body>
</html>