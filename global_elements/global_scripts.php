<?php 
// navigation bar
function navigation_bar($input)
{
echo'
<div id="header">
      <div id="navigation">
        <u1 class="navbar">
          <li class="link">
		    <div class="link">
    	      <div class="navpointer"></div>
		      <a rel="/" class="navlink'; 
if (strcmp($input, "home") == 0) { echo ' active'; }

echo '">Home</a>
            </div>
		  </li>
          <li class="link">
		    <div class="link">
    	      <div class="navpointer"></div>
		      <a rel="/experience" class="navlink';
if ($input == "experience") { echo ' active'; }
echo '">EXP</a>
            </div>
		  </li>
          <li class="link">
		    <div class="link">
    	      <div class="navpointer"></div>
		      <a rel="/inventory" class="navlink';
if ($input == "inventory") { echo ' active'; }
echo '">Inventory</a>
            </div>
	      </li>
        </u1>
      </div>
    </div>';
	}
	
// function to create a skill bar given the skill amount from 0-10
function skillbar($input)
{
	echo '<img class="skillbar" src="../images/skillbar' . $input . '.png" />';
}
?>

<?php
function google_analytics()
{
	echo "<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-56228722-1', 'auto');
		ga('send', 'pageview');

	</script>";
}
?>
