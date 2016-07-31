<?php

code for room4 secret exit
if(strtolower($_POST['#Command_input']) == "search longcase clock" || strtolower($_POST['#Command_input']) == "search clock")
{
$clock = "Well this clock looks soo old...<br>
          I wonder why they never sold it.<br>
		  The case looks strange.<br>
		  Oh whatever I should find that exit.<br>";

if(strtolower($_POST['#Command_input']) == "search case")
{
$case = "Oh what's this a riddle..<br>
         'The odd ones among the crimson banish the incubus.Who are the odd ones ?'";

if(strtolower($_POST['#Command_input']) == "angels")
{
$postern = "(You find that the longcase clock has shifted to the right and a door is revealed.)<br>
             Oh Oh this must be the postern door mentioned in the diary!<br>
			 (You go through the door and come out on the lawn)<br>";
			 
header(Location: 'exit.php');
exit;
}			 
  }           		 
}
  
  
  ?>