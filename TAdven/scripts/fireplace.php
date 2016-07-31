<?php

//intro to fireplace
$fireplace = "I enter the fireplace..<br>
             I see that I am cramped in a narrow path with walls running on both the sides , 
			 a dim lit corridor.<br>
			 There's a painting hanging on the right wall.<br>
			 It looks like two angels fighting a demon.<br>
			 The corridor has a door on left wall followed by one the right and followed again by a third one on the left far ahead.<br>
			 At the end of the path is a big teak door blocked by wooden planks nailed on each other...<br>
			 I dont think I can open that one..<br>";

//initialize variables
$h = "SELECT hammer FROM Var";
$hammer = mysqli_query($con,$h);
$p1 = "SELECT mispage FROM Var";
$page1 = mysqli_query($con,$p1); 		 
$m = "SELECT matchstick FROM Var";
$matchstick = mysqli_query($con,$m);
$kd = "SELECT drawerkey FROM Var";
$drawerkey = mysqli_query($con,$kd);
$d = "SELECT diary FROM Var";
$diary = mysqli_query($con,$d);	

//search table
if(strtolower($_POST['#Command_input']) == "search table")
{
$table = "This table has a torn page lying on top of it.<br>
           It's got a drawer..wonder if it contaibs the key to the drawer in the library.<br>";

//take torn page		   
if(strtolower($_POST['#Command_input']) == "take torn page" $$ diary =='1')
{
$torn = "This has got to be the missing part of the page n the diary.<br>
         Lets see...<br>
		 Yup they fit perfectly.<br>
		 The page reads as 'The key for the door to the basement is in the drawer in the library.<br>";
		 
//update database
$update1 = "UPDATE Var SET mispage = '1'";
		 
}

//search drawer
if(strtolower($_POST['#Command_input']) == "search drawer" $$ $page1 == '1')
{
$searchdrawer = "Sweet!<br>
                 This has got to be the key for the drawer in the library.<br>";

//update database
$update2 = "UPDATE Var SET drawerkey = '1'";
  }
  
else
{
$error ="Invalid command.You can't do that yet.Type help for lis of usable commands.<br>"; 
}  

}

//search fireplace
if(strtolower($_POST['#Command_input']) == "search fireplace")
{
$fireplace = "A hammer.<br>
              I don't think i'll need that.<br>";

//take hammer			  
if(strtolower($_POST['#Command_input']) == "take hammer")
{
$takehammer = "I did I pick this up...<br>";

//update database
$update3 = "UPDATE Var SET hammer = '1'";	  
}

else
{ $error;
}
}



			  
			 

		
?>			