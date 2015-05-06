<html>
  <head>
    <link href='http://fonts.googleapis.com/css?family=Anton|Changa+One|Rubik+One' rel='stylesheet' type='text/css'>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <title>Daniel Jung - Resume</title>
    <meta charset="utf-8"/>
    <link type="text/css" href="../css/djstyle.css" rel="stylesheet" type="tet/css"/>
		<script type="text/javascript" src="../javascript/djs.js"></script>
		<script type="text/javascript" src="../plug-ins/jquery.animateSprite.min.js"></script>
		<script type="text/javascript" src="../javascript/treasure.js"></script>
    <?php include "../global_elements/global_scripts.php"; ?>
	<?php include "../global_elements/footer.php"; ?>
  </head>
  <body>
		<?php include "../global_elements/analyticstracking.php"; ?>
		<?php navigation_bar("experience"); ?>
		<div id="content_container">
			<div id="content_background">
				<div id="content">
					<div id="experience" class="pixel_font">
							<div class="boldpixel_font">
								Skills
							</div>
							<table class="skills pixel_font">
								<tr>
									<td class="skill_list">PHP </td>
									<td class="skill_list"><?php skillbar(3) ?></td>
								</tr>
								<tr>
									<td class="skill_list">Perl </td>
									<td class="skill_list"><?php skillbar(5) ?></td>
								</tr>
								<tr>
									<td class="skill_list">Javascript </td>
									<td class="skill_list"><?php skillbar(5) ?></td>
								</tr>
								<tr>
									<td class="skill_list">jQuery </td>
									<td class="skill_list"><?php skillbar(4) ?></td>
								</tr>
								<tr>
									<td class="skill_list">CSS </td>
									<td class="skill_list"><?php skillbar(7) ?></td>
								</tr>
								<tr>
									<td class="skill_list">Java </td>
									<td class="skill_list"><?php skillbar(3) ?></td>
								</tr>
								<tr>
									<td class="skill_list">C++ </td>
									<td class="skill_list"><?php skillbar(9) ?></td>
								</tr>
								<tr>
									<td class="skill_list">C </td>
									<td class="skill_list"><?php skillbar(8) ?></td>
								</tr>
								<tr>
									<td class="skill_list">SQL </td>
									<td class="skill_list"><?php skillbar(6) ?></td>
								</tr>
								<tr>
									<td class="skill_list">Linux </td>
									<td class="skill_list"><?php skillbar(7) ?></td>
								</tr>
								<tr>
									<td class="skill_list">OOP </td>
									<td class="skill_list"><?php skillbar(9) ?></td>
								</tr>
							</table>
						
						<br/>
						
						<div class="boldpixel_font">
							Quests Completed
						</div>
						
						<div class="exp_content">
							<div class="petyka_font">
								Application Support Analyst
							</div>
							<div>
								Citigroup - January 2014 to April 2014 <br/>
								<table class="list pixel_font">
									<tr>
										<td>-</td> 
										<td>Monitored servers</td>
									</tr>
									<tr>
										<td>-</td> 
										<td>Created reports using functional programming language</td>
									</tr>
									<tr>
									 <td>-</td> 
										<td>Created a web application capable of searching through and filtering files on
										a server in a nice GUI format</td>
									</tr>
									<tr>
									<tr>
									 <td>-</td> 
										<td>Ran day to day checks on applications and create tickets for any issues</td>
									</tr>
									<tr>
										<td>-</td>
										<td>Hunted 500 Skelesaurs</td>
									</tr>
								</table>
							</div>
						
							<div class="petyka_font">
								Special Project Assistant
							</div>
							<div>
								York Region - September 2014 to December 2014 <br/>
								<table class="list pixel_font">
									<tr>
											<td>-</td> 
										<td>Used Oracle APEX to design and create web applications</td>
									</tr>
									<tr>
										<td>-</td> 
										<td>Used SQL and PL/SQL to create dynamic and logical web pages</td>
									</tr>
									<tr>
										<td>-</td> 
										<td>Designed database structure to fit business needs</td>
									</tr>
									<tr>
										<td>-</td> 
										<td>Worked in a group to create a KPI application that reports monthly, quarterly, and yearly values</td>
									</tr>
								</table>
							</div>
						</div>
						
						<br/>
						
						<div class="boldpixel_font">
							Guild
						</div>
						
						<div class="exp_content">
							<div class="petyka_font">
								University of Waterloo
							</div>
							<div>
								September 2011 to Present
							</div>
							<div class="petyka_font">
								Raids Completed
								<table class="pixel_font raids">
									<tr>
										<td>User Interfaces</td>
										<td>Created a 2D platformer using C++ and Linux X Window System</td>
									</tr>
									<tr>
										<td>Object-Oriented Software Development</td>
										<td>Designed and created a Hearts card game simulation using C++ and OOP</td>
									</td>
									<tr>
										<td>Introduction to Database Management</td>
										<td>Created simple database applications using Embedded SQL and C</td>
									</tr>
								</table>
							</div>
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