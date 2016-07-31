<?php
session_start();

$_session['help']=$help;

if($_GET[#Command_input]== "help") {
			$help = "This is the help section:<br></br>
             To take a item type : take 'item name',<br></br>
			 to take a doors key type : take door'door number'key,(eg take door3key )<br></br>,
             To unlock a door type : unlock 'door name' with 'item name',
             <br></br>
             To open a door type : open 'door name',<br></br>
             To use a item type : use 'item name'<br></br>
             To view inventory type : Inventory";	
			};
			
	?>		
