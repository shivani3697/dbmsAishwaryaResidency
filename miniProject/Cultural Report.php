<?php
include("Database\connection.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Aishwarya Recidency-MAINTENANCE</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="wrapper"> 
<div>
<ul>
  <li><a class="active" href="#home">Home</a></li>
<li style="float:right"><a class="active" href="index.html">Logout</a></li>
</ul>
</div>
<div class="content">
  <h2><center>Aishwarya Recidency</center></h2>  
</div>

<center>
<h1>
  <p style="color:#9370DB;">Cultural Department</p></h1>
<h3>
<p style = "color:#2F4F4F;">DEPARTMENT HEAD : KALPANA KANKARIA</p></h3>
<br><br>
<hr>		


<center>
<h2>REPORT</h2>
					    <table >
						<thead>
						  <tr>
							<th>Year</th>
							<th>Annual Buget</th>
							<th>Festival name</th>
							<th>Festival Budget</th>
						  </tr>
						</thead>
						<tbody>
						<?php

							$sql_sel="select * from cultural ";
							$res=mysql_query($sql_sel);
							if($res==true)
							{
							$i=0;
							while($row=mysql_fetch_array($res))
							{$i++;
						?>
							<tr>
							<td><?php echo $row['year'];?></td>
							<td><?php echo $row['annul_bug'];?></td>
							<td><?php echo $row['festival name'];?></td>
							<td><?php echo $row['fbudget'];?></td>
							
						  </tr>
						  <?php
							}
							}
							else
							{
								echo "<script type='text/javascript'>alert('Error');</script>";
							}
						  ?>
						 </tbody>
					  </table>
</center>
</div>
</div>
</body>
</html>