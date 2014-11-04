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

function footer_links()
{
	echo '
						<div style="width: 200px; height: 80px; margin: 0 auto;">
							<div id="github_link" style="width: 69px; height: 78px; left: 40%; position: absolute;">
								<div style="position: absolute;">
									<canvas id="github_treasure"></canvas>
								</div>
								<div style="left: 10px; top: 20px; height: 50; width: 50; position: absolute; pointer-events:none; ">
									<img src="/images/github.png" style="max-width: 100%; max-height: 100%;"/>
								</div>
							</div>
							<script>create_treasure("#github_treasure", "#github_link", "https://github.com/DJBorn");</script>
			
							<div id="linkedin_link" style="width: 69px; height: 78px; right: 40%; position: absolute;">
								<div style="position: absolute;">
									<canvas id="linkedin_treasure"></canvas>
								</div>
								<div style="left: 10px; top: 20px; height: 50; width: 50; position: absolute; pointer-events:none; ">
									<img src="/images/Linked_In_Icon.png" style="max-width: 100%; max-height: 100%;"/>
								</div>
							</div>
						</div>
						<script>create_treasure("#linkedin_treasure", "#linkedin_link", "https://www.linkedin.com/in/idjung");</script>';
}
?>

