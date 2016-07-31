<?php
//intro to hallway
$Hallway = "I am inside the Manor..<br>
            I see that I am cramped in a narrow path with walls running on both the sides , 
			a dim lit corridor.<br>
			There's a painting hanging on the right wall.<br>
			It looks like two angels fighting a demon.<br>
			The corridor has a door on left wall followed by one the right and followed again by a third one on the left far ahead.<br>
			At the end of the path is a big teak door blocked by wooden planks nailed on each other...<br>
			I dont think I can open that one..<br>";
			
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
//go to room1
else if ( strtolower($_POST['#Command_input']) == "go to door1" )
{
header("Location: library.php");
 exit;
}

//go to room2
else if( strtolower($_POST['#Command_input']) == "go to door2")
{
header("Location: fireplace.php");
exit;
};

//go to room3
else if( strtolower($_POST['#Command_input']) == "go to door3")
{
header("Location: basement.php");
exit;
};

//go to room4
else if( strtolower($_POST['#Command_input']) == "go to door4")
{
header("Location: 1.php");
exit;
};
//go to kitchen or dummy room
else if( strtolower($_POST['#Command_input']) == "go to door5")
{
header("Location: kitchen.php");
exit;
};

else
{
$error = "<br>Invalid input";
};		  




?>