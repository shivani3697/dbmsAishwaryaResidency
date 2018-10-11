<?php
if($_POST)
{
	$con=mysql_connect("localhost","root","");
	mysql_select_db("society");
	
if(isset($_POST['submit']))
{		
	$ID=$_POST['w_id'];
	$name=$_POST['w_name'];
	$d_id=$_POST['d_id'];
	$role=$_POST['role'];
	$salary=$_POST['salary'];
	$gender=$_POST['gender'];
	$contact=$_POST['contact'];
	$address=$_POST['address'];
	
	$sql="insert into workers values ('$ID','$name','$d_id','$role','$salary','$gender','$contact','$address')";
			
			
			$result=mysql_query($sql);
			
			if($result)
			{
				echo "<script type='text/javascript'>alert('Register Successfully');window.location='workers_data.html';</script>";
				
			}
			else
			{
				echo "not save";
			}
  }
  if(isset($_POST['update']))
  {
	  $ID=$_POST['w_id'];
	$name=$_POST['w_name'];
	$d_id=$_POST['d_id'];
	$role=$_POST['role'];
	$salary=$_POST['salary'];
	$gender=$_POST['gender'];
	$contact=$_POST['contact'];
	$address=$_POST['address'];
	
	$usql="update workers set salary='$salary' where w_id='$ID'";
	$resultup=mysql_query($usql);
			
			if($resultup)
			{
				echo "<script type='text/javascript'>alert('UPDATED Successfully');window.location='workers_data.html';</script>";
				
			}
			else
			{	
				echo "not save";
			}
  }
  else
	  echo "Canot update"; 
	if(isset($_POST['delete']))
  {
	  $ID=$_POST['w_id'];
	$name=$_POST['w_name'];
	$d_id=$_POST['d_id'];
	$role=$_POST['role'];
	$salary=$_POST['salary'];
	$gender=$_POST['gender'];
	$contact=$_POST['contact'];
	$address=$_POST['address'];
	
	$dsql="delete from workers where w_id='$ID'";
	$resultup=mysql_query($dsql);
			
			if($resultup)
			{
				echo "<script type='text/javascript'>alert('Deleted Successfully');window.location='workers_data.html';</script>";
				
			}
			else
			{	
				echo "not Deleted";
			}
  }
  
}
?>