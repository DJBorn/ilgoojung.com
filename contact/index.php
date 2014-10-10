<html lang="en">
  <head>
    <link href='http://fonts.googleapis.com/css?family=Anton|Changa+One|Rubik+One' rel='stylesheet' type='text/css'>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <title>Daniel Jung - Contact</title>
    <meta charset="utf-8"/>
    <link type="text/css" href="/css/djstyle.css" rel="stylesheet" type="tet/css"/>
	<script type="text/javascript" src="/javascript/djs.js"></script>
    <?php include "../global_elements/header.php"; ?>
  </head>
  <body>
	<?php navagation_bar("contact"); ?>
    <div id="content">
      <form action="MAILTO:i3jung@uwaterloo.ca" method="post" enctype="text/plain">
      Name:<br>
      <input type="text" name="name"><br>
      E-mail:<br>
      <input type="text" name="mail"><br>
      Comment:<br>
      <input type="text" name="comment" size="50"><br><br>
      <input type="submit" value="Send">
      <input type="reset" value="Reset">
      </form>
    </div>
    <div id="footer">
      Copyright 2014 &#169 Ilgoo Jung
    </div>
  </body>
</html>