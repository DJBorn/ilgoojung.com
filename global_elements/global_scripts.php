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
