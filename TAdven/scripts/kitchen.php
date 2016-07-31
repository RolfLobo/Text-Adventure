<?php
//intro to garden Help
$kitchen = "This is the kitchen.<br>
There are rusted pots and pans on the counter.<br>
There is a fridge in the corner<br>
There are cabinets and shelves with broken windows <br>
The sink is dirty and the counter is covered with dust<br>
Looks like it hasnt been used in for a long time<br> ";
	
if 	(strtolower($_POST['#Command_input']) == "search rusted pots")
{
$pots= "The pot appears to be empty!!";

}
	
elseif 	(strtolower($_POST['#Command_input']) == "search fridge")
{
$fridge= "Fridge doesnt seem to work at all.There is only rotten food items";

}
	
elseif 	(strtolower($_POST['#Command_input']) == "search broken cabinets")
{
$cabinets= "you found  an hidden obeject!!!.";

}
	
elseif 	(strtolower($_POST['#Command_input']) == "go to hallway")
{
header("Location: hallway.php");
 exit;
}
else
{
$error = "<br>Invalid input";
};
?>