<?php
//intro to garden Help
$garden = " The garden looks far from beautiful.<br>
I can see a broken swing in the middle of the garden<br>
There are dead plants all around... Dead leaves are strewn on the muddy ground.br>
There are some broken benches and a rickety table in the corner of the garden. <br>
I can see three pots , each of a different color just nearing the entrance of the garden.<br>
One of them is red, the other is black and the last one is brown in colour.<br>";



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
			 
	
elseif 	(strtolower($_POST['#Command_input']) == "search broken swing")
{
$swing= "The swing looks rusted. Looks like this manor has been abandoned for a long time. There is nothing to be found here.";

}

elseif 	(strtolower($_POST['#Command_input']) == "search bench")
{
$bench= "The swing looks worn out.It can break any minute now. Nothing here too!!";

}

elseif 	(strtolower($_POST['#Command_input']) == "search table")
{
$table= "There is a pot on the table.";


if (strtolower($_POST['#Command_input']) == "search pot")
{
$pot= " I found the key!";
}

}
elseif 	(strtolower($_POST['#Command_input']) == "search red pot ")
{
$red= "There is nothing under this pot!!";

}


elseif 	(strtolower($_POST['#Command_input']) == "search black pot ")
{
$black= "There is nothing under this pot!!";

}elseif 	(strtolower($_POST['#Command_input']) == "search brown pot ")
{
$brown= "There is nothing under this pot!!";
}




else if ( strtolower($_POST['#Command_input']) == "go to manor" )
{ $man="You cannot go to the manor without passing through the lawn "
 
}
//go to lawn
else if ( strtolower($_POST['#Command_input']) == "go to lawn" )
{ header("Location:lawn.php");
exit;
 
}
else if ( strtolower($_POST['#Command_input']) == "go to garage" )
{ $garage="You cannot go to the garage without passing through the lawn "
 
}
?>