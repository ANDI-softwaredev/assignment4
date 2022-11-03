<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Enquiries</title>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<style type="text/css">
		body{
			background-color: pink;
		}
		table,th,td{
			border: 1px solid black;
			width: 1100px;
			background-color: white;
		}
	</style>
</head>
<body>
	<center>
<h1> Retrieved data from the ANDI database</h1>

<div class="container"> 
	<form action="POST">
		<table>
			 <tr>
			 	<th> NAME</th>
			 	<th> PHONE</th>
			 	<th> EMAIL</th>
			 	<th> MEMO</th>
			 </tr>
		</table>
		<input type="submit" name="search" value="VIEW ENQUIRIES" class="submit">
		
	</form>
	<?php
$connection = mysqli_connect("sql8.freemysqlhosting.net", "sql8537860", "pjmbd5dlyx");
$db = mysqli_select_db($connection, 'sql8537860');


if(isset($_POST['search'])) 
{
	$query = "SELECT * FROM 'enquiry'";
	$query_run = mysqli_query($connection,$query);

	while ($row = mysqli_fetch_array($query_run)) 
	{
	?> 
	<tr>
		<td> <?php echo $row['name'] ?> </td>
		<td> <?php echo $row['phone'] ?> </td>
		<td> <?php echo $row['email'] ?> </td>
		<td> <?php echo $row['memo'] ?> </td>
	</tr>
	<?php
	}
}

?>

	?>
</div>
  </center>
</body>
</html>