<?php
if($_POST)
{
	$con=mysql_connect("localhost","root","");
	mysql_select_db("society");
	echo "hoiii";
	if(isset($_POST['submit']))
	{		
	echo"dashbdj";
	$Year=$_POST['Year'];
	$Budget=$_POST['AnnualBudget'];
	$Tankers_week=$_POST['Tanker_week'];
	$Tankers_month=$_POST['Tanker_month'];
	
	$sql="insert into water values('$Year','$Budget','$Tankers_week','$Tankers_month')";
			
			
			$result=mysql_query($sql);
			
			if($result)
			{
				echo "<script type='text/javascript'>alert('Data Entered');window.location='Water Head.html';</script>";
				
			}
			else
			{
				echo "not save";
			}
	}
	else
	{	
	  echo "error";
	}
}
else
{
	echo"Not known";
}
?>