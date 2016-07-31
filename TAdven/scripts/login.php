<?php
session_start();
if(isset($_SESSION['username']))
{
	header('location:event.php');
	exit();
}
?>
<?php
if(isset($_POST['username']) && isset($_POST['password']))
{
	 $username = preg_replace('#[^A-Za-z0-9]#i','',$_POST['username']); //Perform a regular expression search and replace
	 $password = preg_replace('#[^A-Za-z0-9]#i','',$_POST['password']);
	 include("script/conn.php");
			$sql=mysql_query("select * from tek_student where username='$username' and password='$password'");
			$count=mysql_num_rows($sql);
			$row=mysql_fetch_array($sql);
			// $username=$row['username'];
			// $password=$row['password'];
			if($count==1 && $username==$row['username'] && $password==$row['password'])
			{
				session_regenerate_id(true);  //Update the current session id with a newly generated one
				$_SESSION['username']=$username;
				$_SESSION['password']=$password;
				header('location:event.php');
				exit();
			}
			else
			{
				echo "<div style='width:100%;'align='center' id='wait' name='wait'> <font size='4'><label style='background:#FED;border:1px solid #FFC993; padding:1%;'>Wrong username or Password.</label></font></div><br />";
			}
	}
?>