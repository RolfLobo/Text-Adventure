<? php
//create con
$con = mysqli_connect();

//check con
if ( !$con)
{
die("Connection failed: " .mysqli_connect_error());
}

//create db
$sql = "CREATE DATABASE Text";

//run sql command
$rundb = mysqli_query($con,$sql);

//create table
$sqltable = "CREATE TABLE Var (
             id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
             key3 int(6),
			 hammer int(6),
			 matchstick int(6),
             diary int(6),
			 mispage int(6),
			 planks int(6),
             drawerkey int(6),			 
)

//initialize values
$var = "INSERT INTO Var (key3 , hammer , matchstick , diary , mispage , planks , drawerkey)
        VALUES ('0' , '0' , '0' , '0' , '0' , '0' , '0)";

//run command
$revar = mysqli_query($con,$var);
		
?>