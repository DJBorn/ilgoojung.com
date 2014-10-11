<?php 
// navigation bar
function navigation_bar($input)
{
echo'
<div id="header">
      <div id="navigation">
        <u1>
          <li class="link">
		    <div class="link">
    	      <div class="navpointer"></div>
		      <a href="/" class="navlink'; 
if (strcmp($input, "home") == 0) { echo ' active'; }

echo '">Home</a>
            </div>
		  </li>
          <li class="link">
		    <div class="link">
    	      <div class="navpointer"></div>
		      <a href="/experience" class="navlink';
if ($input == "experience") { echo ' active'; }
echo '"> EXP</a>
            </div>
		  </li>
          <li class="link">
		    <div class="link">
    	      <div class="navpointer"></div>
		      <a href="/projects" class="navlink';
if ($input == "projects") { echo ' active'; }
echo '">Projects</a>
            </div>
	      </li>
        </u1>
      </div>
    </div>';
	}
	
// function to create a skill bar given the skill amount from 0-10
function skillbar($input)
{
	echo '<img src="../images/skillbar' . $input . '.png" />';
}
?>
