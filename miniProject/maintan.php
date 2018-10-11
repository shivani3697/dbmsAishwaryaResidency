	 <?php
if($_POST)
{
	$con=mysql_connect("localhost","root","");
	mysql_select_db("society");
	
	if(isset($_POST['submit']))
	{	
	
	$ybudget1=$_POST['ybudget'];
	$year_main1=$_POST['year_main'];
	$sdate_elev1=$_POST['sdate_elev'];
	$ddate_elev1=$_POST['ddate_elev'];
	$amt_ele1=$_POST['amt_ele'];
	$sdate_swim1=$_POST['sdate_swim'];
	$ddate_swim1=$_POST['ddate_swim'];
	$amt_swim1=$_POST['amt_swim'];
	$sdate_gym1=$_POST['sdate_gym'];
	$ddate_gym1=$_POST['ddate_gym'];
	$amt_gym1=$_POST['amt_gym'];
	$sdate_garden1=$_POST['sdate_garden'];
	$ddate_garden1=$_POST['ddate_garden'];
	$amt_garden1=$_POST['amt_garden'];
	
	$sql="insert into maintenance values ('$ybudget1','$year_main1','$sdate_elev1','$ddate_elev1','$amt_ele1','$sdate_swim1','$ddate_swim1','$amt_swim1','$sdate_gym1','$ddate_gym1','$amt_gym1','$sdate_garden1','$ddate_garden1','$amt_garden1')";
	
		$result=mysql_query($sql);
		if($result)
			{
				echo "<script type='text/javascript'>alert('Record Added In Database');window.location='Maintenance Head.html';</script>";
				
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
	
	$ybudget1=$_POST['ybudget'];
	$year_main1=$_POST['year_main'];
	$sdate_elev1=$_POST['sdate_elev'];
	$ddate_elev1=$_POST['ddate_elev'];
	$amt_ele1=$_POST['amt_ele'];
	$sdate_swim1=$_POST['sdate_swim'];
	$ddate_swim1=$_POST['ddate_swim'];
	$amt_swim1=$_POST['amt_swim'];
	$sdate_gym1=$_POST['sdate_gym'];
	$ddate_gym1=$_POST['ddate_gym'];
	$amt_gym1=$_POST['amt_gym'];
	$sdate_garden1=$_POST['sdate_garden'];
	$ddate_garden1=$_POST['ddate_garden'];
	$amt_garden1=$_POST['amt_garden'];
		
		$usql="update maintenance set ybudget='$ybudget1' where year='$year_main1";
	$resultup=mysql_query($usql);
			
			if($resultup)
			{
				echo "<script type='text/javascript'>alert('UPDATED Successfully');window.location='Maintenance Head.html';</script>";
				
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
	
	  $dsql="delete from maintenance where year='$year1'";
	$resultup=mysql_query($dsql);
			
			if($resultup)
			{
				echo "<script type='text/javascript'>alert('Deleted Successfully');window.location='Maintenance Head.html';</script>";
				
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