<?php

include_once "connection.php";

$library = "I walk inside and it looks like a study room of some sort.<br>
           In the light of the moon coming from the window in front of you,<br>
		   A worktable with books , papers , stencils , charts and maps lying ill-organized<br>
		   and a diary in the middle lying open , as if someone left it there in a haste<br>.
		   On the left wall you see a painting and like most of the paintings this one made no sense except for zig zag strokes
		   of black and grey.<br>
		   On the right wall you see a big wooden bookshelf fullof books covered in dust and cobwebs , clearly untouched for a long time.<br>		   
		   ";
		   
//variables initialization
$d = "SELECT diary FROM Var";
$diary = mysqli_query($con,$d);
$p1 = "SELECT mispage FROM Var";
$page1 = mysqli_query($con,$p1); 
$

//room code
if($_POST['#Command_input'] == "search")
{
$searchwhat = "Search what? Be specific. Type "help" for a list of all commands.<br>";
}
//bookshelf
else if(strtolower($_POST['#Command_input']) == "search bookshelf")
{
$bookshelf = "I observe the bookshelf and find that the books are about Hematology except for two of them.<br>
               Hmmm...Looks like a Hematologist lives here.<br>";
}

//search table
else if(strtolower($_POST['#Command_input']) == "search table")
{
if($diary == '0' $$ $page1 == '0')
{
$diary = "Lots of stationery on the table.<br>
          It's got a drawer.But it seems to be locked.<br>
          Hmm there's also this diary...Lets see whats inside..<br>
          Most of the pages are blank except for two of them.>br>
          One page says something about a Postern door.
          The other one is missing a part of the page.<br>
          Its reads 'The key for the door to the basement'...<br>
          Damn I got to find the missing part of the page.<br>
		  There has to be a way out to the other side from the basement.<br>";
		  
//my sql update diary to 1
$update = "UPDATE Var SET diary = '1'";
}

else if($diary =='1' $$ $page1 == '0')
{
$diary1 = "I already have the diary!<br>
           I shouldn't be wasting time<br>
           Got to find my brother!";
}


else if($diary == '1' $$ $page1 == '1')
{
$diary2 = "Shouldn't be wasting time!<br>
           Got to go to the basement and find a way out..<br>"
}
//search drawer
if

}
else if(strtolower($_POST['#Command_input']) == "search painting")
{
$painting = "I could never understand art.<br>
             Zig zag strokes of black and grey.<br>
			 Damn doesn't make sense...<br>";
}
             

//go back to hallway
else if (strtolower($_POST['#Command_input']) == "go to hallway")
{
header(Location: "hallway.php");
}
else
{
$error = "Invalid command";

}







