<?php
if($_POST)
{
	$con=mysql_connect("localhost","root","");
	mysql_select_db("society");
	
if(isset($_POST['submit']))
{	
	$flattype=$_POST['flatT'];
	$amount=$_POST['Amount'];
	$Paytype=$_POST['X1'];

	
	$sql="insert into pay values ('$flattype','$amount','$Paytype')";
						
			$result=mysql_query($sql);
			
			if($result)
			{
				echo "<script type='text/javascript'>alert('inserted Successfully');window.location='NULL.html';</script>";
				
			}
			else
			{
				echo "not save";
			}
}
}
?>