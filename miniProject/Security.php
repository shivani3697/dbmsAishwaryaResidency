<?php
if($_POST)
{
	$con=mysql_connect("localhost","root","");
	mysql_select_db("society");
	
if(isset($_POST['submit']))
{		
	$year1=$_POST['year'];
	$annulB1=$_POST['ybudget'];
	$monthB1=$_POST['mbudget'];

	
	$sql="insert into security values ('$year1','$annulB1','$monthB1')";
						
			$result=mysql_query($sql);
			
			if($result)
			{
				echo "<script type='text/javascript'>alert('inserted Successfully');window.location='Houskeeping Head.html';</script>";
				
			}
			else
			{
				echo "not save";
			}
  }
  if(isset($_POST['update']))
   {
	   $year1=$_POST['year'];
	$annulB1=$_POST['ybudget'];
	$monthB1=$_POST['mbudget'];	
		
		$usql="update security set annulB='$annulB1' where year='$year1";
	$resultup=mysql_query($usql);
			
			if($resultup)
			{
				echo "<script type='text/javascript'>alert('UPDATED Successfully');window.location='Houskeeping Head.html';</script>";
				
			}
			else
			{	
				echo "not update";
			}
   }
   if(isset($_POST['delete']))
  {
	 $year1=$_POST['year'];
	$annulB1=$_POST['ybudget'];
	$monthB1=$_POST['mbudget'];
	
	  $dsql="delete from security where year='$year1'";
	$resultup=mysql_query($dsql);
			
			if($resultup)
			{
				echo "<script type='text/javascript'>alert('Deleted Successfully');window.location='Houskeeping Head.html';</script>";
				
			}
			else
			{	
				echo "not Deleted";
			}
  }
}
?>