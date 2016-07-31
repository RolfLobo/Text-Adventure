<?php
//intro to driveway Help
$driveway = " The dirveway leads me to the garage.<br>


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
			 else if ( strtolower($_POST['#Command_input']) == "go to garage" )
{ $gar=" The garage is locked. Will have to look somewhere else."

}

//go to lawn
else if ( strtolower($_POST['#Command_input']) == "go to garden" )
{ $gard="Cannot go to the garden without passing through the lawn!"
 
}
else if ( strtolower($_POST['#Command_input']) == "go to manor" )
{ $man="The manor is locked. Have to find a key!"
 
}
//go to lawn
else if ( strtolower($_POST['#Command_input']) == "go to lawn" )
{ header("Location:lawn.php");
exit;
 
}
?>