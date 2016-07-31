<?php require('scripts/login.php'); ?>

<html>
	<head>
		<title>TA</title>
<style>
.but{
position: absolute;
top: 90%;
left: 60%;
margin-top: -50px;
margin-left: -50px;
	}
.city {
position: absolute;
top: 40%;
left: 45%;
margin-top: -50px;
margin-left: -50px;
padding: 15px;
width: 300px;
height: 150px;
border: 1.5px solid #E01919;
}

body {
        background-image: url(" bg.jpg");
		text-align: center;
} 
 

</style>
	</head>
	<body>

<div id = "heading">
		<FONT COLOR="#E01919"><h1>Login</h1><br/></FONT>
</div>			
<div class="city">
<form action="index.php" method="post">
	
<FONT COLOR="#E01919">
Username:<br/><input type="text" name="username"/><br/>
Password:<br/><input type="password" name="password"/><br>
<input type="submit" name="submit" value="Submit" class = "but"/>
</div>

</form>		
	</body>
</html>