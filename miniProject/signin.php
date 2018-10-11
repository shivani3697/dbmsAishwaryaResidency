<?php
if($_POST)
{
	include("Database\connection.php");
	
	if(isset($_POST['submit']))
	{	
	
	$fname=$_POST['fnametxt'];
	$lname=$_POST['lnametxt'];
	$flat_no=$_POST['flatno'];
	$mob=$_POST['phonetxt'];
	$mail=$_POST['emailtxt'];
	$useroption=$_POST['usertype'];
	$comtoption=$_POST['category'];
	$user=$_POST['usertxt'];
	$pwd=$_POST['pwdtxt'];
	
	 $sql="insert into members values ('$fname','$lname','$flat_no','$mob','$mail','$useroption','$comtoption','$user','".md5($pwd)."')";
	$result=mysql_query($sql);

		if($result)
			{
				echo "<script type='text/javascript'>alert('Register Successfully');window.location='login.html';</script>";
				
			}
			else
			{
				echo "not save";
			}
  }
}
?>