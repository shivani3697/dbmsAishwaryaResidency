<?php
if($_POST)
{

include("Database\connection.php");

	if(isset($_POST['submit']))
	{
		
		session_start();
		$username=$_POST['usertxt'];
		$password=$_POST['pwdtxt'];
		$useroption=$_POST['usertype'];
		$comtoption=$_POST['category'];
	
		$username = stripslashes($username);
		$username = mysql_real_escape_string($username);
		
		$password = stripslashes($password);
		$password = mysql_real_escape_string($password);		
		

		$sql="select * from members where username='$username' and usertype='$useroption' and password='".md5($password)."'";
		$result=mysql_query($sql);	
		echo "done";
		$rows=mysql_num_rows($result);
		echo "done";
		if($result)
		{
			echo "<script type='text/javascript'>alert('Register Successfully');window.location='$comtoption.html';</script>";
		}
		else{
						echo "<script type='text/javascript'>alert('ERROR');window.location='login.html';</script>";

		}
	}
	else
	{
		echo "what happen";
	}
}
?>