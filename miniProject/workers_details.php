<?php
$con=mysql_connect("localhost","root","");
	mysql_select_db("mysql");
	?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Aishwarya Recidency-Security </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/validate.js"></script>
<script type="text/javascript" src="js/table.js"></script>

</head>
<body>


<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}

table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
</style>
</head>
<body>

<ul>
  <li><a class="active" href="index.html">Home</a></li>
<li style="float:right"><a class="active" href="index.html">Logout</a></li>
</ul>



<div class="content">
  <h2><center>Aishwarya Residency</center></h2>
</div>

<table style="width:100%">
  <tr>
    <th>Worker ID</th>
    <th>Worker name</th> 
    <th>Department ID</th>
	<th>Role</th>
	<th>Salary</th>
	<th>Gender</th>
	<th>Contact</th>
	<th>Address</th>
  </tr>
						<?php
							$sql_sel="select * from workers ";
							$res=mysql_query($sql_sel);
							if($res==true)
							{
							$i=0;
							while($row=mysql_fetch_array($res))
							{$i++;
						?>
						<tr>
							<td><?php echo $row['w_id'];?></td>
							<td><?php echo $row['w_name'];?></td>
							<td><?php echo $row['d_id'];?></td>
							<td><?php echo $row['role'];?></td>
							<td><?php echo $row['salary'];?></td>
							<td><?php echo $row['gender'];?></td>
							<td><?php echo $row['w_contact'];?></td>
							<td><?php echo $row['w_address'];?></td>
							
						  </tr>
						  <?php
							}
							}
							else
							{
								echo "<script type='text/javascript'>alert('Error');</script>";
							}
						  ?>
</table>
<div class="entries">
<br>
</center>
</div>

</body>
</html>