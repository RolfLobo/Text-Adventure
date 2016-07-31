<?<?php
//intro to lawn Help
$lawn = " I see  a manor up north in front of me . It looks old and crumbling down.<br>
A gravelled path leads me to a driveway on the east.<br>
A small muddy pathway will lead me to a garden on my west.<br>

//help			
if (strtolower($_POST['#Command_input']) == "help")
{
 $help = "This is the help section:<br></br>
             To take a item type : take 'item name',<br></br>
			 to take a doors key type : take door'door number'key,(eg take door3key )<br></br>,
             To unlock a door type : unlock 'door name' with 'item name',
             <br></br>
             To open a door type : open 'door name',<br></br>
             To use a item type : use 'item name'<br></br>
             To view inventory type : Inventory";	
			 };
			 
			 
// DRIVEWAY			 
			 else if ( strtolower($_POST['#Command_input']) == "go to driveway" )
{
header("Location: driveway.php");
 exit;
}

//go to garden
else if( strtolower($_POST['#Command_input']) == "go to garden")
{
header("Location:garden.php");
exit;
};

//go to manor
else if( strtolower($_POST['#Command_input']) == "go to manor")
{
header("Location:manor.php");	
exit;
};