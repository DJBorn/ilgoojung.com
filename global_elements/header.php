<?php 

function navagation_bar($input)
{
echo'
<div id="header">
      <div id="navigation">
        <u1>
          <li class="link">
    	    <img class="navpointer" src="/images/pointer.png"/>
		    <a href="/" class="navlink'; 
if (strcmp($input, "home") == 0) { echo ' active'; }

echo '">Home</a>

		  </li>
          <li class="link">
		    <img class="navpointer" src="/images/pointer.png"/>
		    <a href="/resume" class="navlink';
if ($input == "resume") { echo ' active'; }
echo '"> Resume</a>
		  </li>
          <li class="link">
		    <img class="navpointer" src="/images/pointer.png"/>
		    <a href="/contact" class="navlink';
if ($input == "contact") { echo ' active'; }
echo '">Contact</a>
		  </li>
          <li class="link">
		    <img class="navpointer" src="/images/pointer.png"/>
		    <a href="/projects" class="navlink';
if ($input == "projects") { echo ' active'; }
echo '">Projects</a>
	      </li>
        </u1>
      </div>
    </div>';
	}
?>
