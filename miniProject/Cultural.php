<?php
if($_POST)
{
	$con=mysql_connect("localhost","root","");
	mysql_select_db("society");
	
	if(isset($_POST['submit']))
	{
	
	$year1=$_POST['year'];
	$annulb1=$_POST['Annual_Budget'];
	$ftxt1=$_POST['Ftxt'];
	$fbugdt1=$_POST['F_budget'];
	
	
	$sql="insert into cultural values ('$year1','$annulb1','$ftxt1','$fbugdt1')";
	
		$result=mysql_query($sql);
		if($result)
			{
				echo "<script type='text/javascript'>alert('Record Added In Database');window.location='Cultural Head.html';</script>";
				
			}
			else
			{
				echo "<script type='text/javascript'>alert('opps! There Is Some Problem In Adding Record')</script>";
			}
	}
	else
	{
		echo "error";
	}
	if(isset($_POST['update']))
   {
	   $year1=$_POST['year'];
	$annulb1=$_POST['Annual_Budget'];
	$ftxt1=$_POST['Ftxt'];
	$fbugdt1=$_POST['F_budget'];	
		
		$usql="update cultural set fbudget='$fbudget1' where year='$year1";
	$resultup=mysql_query($usql);
			
			if($resultup)
			{
				echo "<script type='text/javascript'>alert('UPDATED Successfully');window.location='Cultural Head.html';</script>";
				
			}
			else
			{	
				echo "not update";
			}
   }
   if(isset($_POST['delete']))
  {
	  $year1=$_POST['year'];
	$annulb1=$_POST['Annual_Budget'];
	$ftxt1=$_POST['Ftxt'];
	$fbugdt1=$_POST['F_budget'];
	
	  $dsql="delete from cultural where year='$year1'";
	$resultup=mysql_query($dsql);
			
			if($resultup)
			{
				echo "<script type='text/javascript'>alert('Deleted Successfully');window.location='Cultural Head.html';</script>";
				
			}
			else
			{	
				echo "not Deleted";
			}
  }
}
else
{
	echo "Not known";
}
?>