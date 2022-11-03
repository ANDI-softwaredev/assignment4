<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="hair growth, skin care, length retention, hydration, natural products">
	<meta name="author" content="Unicorn ANDI">
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<link rel="stylesheet" href="script.js">
	<link rel="icon"  href="img\favicon.png">
	<title>ANDI by Andile | hair & skin | </title>
</head>
<body >
		<style type="text/css">
		body{
			background: url(img/shop_background.jpg);
		
			background-size: cover;
			font-size: 20px;
		}
		.phpp{
			background: white;
		}
		table,th,td{
			border: 1px solid pink;
			min-width: 335px;
			height: 50px;
			background-color: white;
			text-align: center;
			flex: 1;
		}
		input{
			width: 330px;
			height: 45px;
			font-size: 20px;
		}
	

	</style>
	<center>

	<a href="#modalbox"> <img src="icons\menu.png" class="menu" width="50px" height="50px" title="open menu options"> </a>

<div id="modalbox" class="modal">
	<div class="modalcontent">
		<ul>
			<li> <a href="index.php"> HOME</a></li>
			<li> <a href="shop.php"> SHOP</a></li>
			<li> <a href="about.php"> ABOUT</a></li>
			<li> <a href="question1.php"> QUESTION1</a></li>
			<li> <a href="enquiries.php"> ENQUIRIES</a></li>
		</ul>
		<a href="#" class="modalclose"> &times;</a>
	</div>
</div>

	<div class="uniform_header">
		All Enquiries <img src="icons/love-hand-drawn-heart-symbol-outline.png" width="80px" height="80px">
	</div>
	 
	<!---inserting into form--->
<form action="reply.php" id="form" method="POST">
		
	
		<label for="memo" id="me">Memo: &nbsp</label>
	<div class="input_ctrl">
		 <textarea id="memo" name="memo" rows="3" placeholder="Paste the memo you want to reply to here"></textarea> 
		 <div class="error"></div>
	</div>

	<label for="response" id="re">Response: &nbsp</label>
	<div class="input_ctrl">
		 <textarea id="re" name="response" rows="3" placeholder="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		 tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		 quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		 consequat."></textarea> 
		 <div class="error"></div>
	</div>
	
	  <br> <br>
	<!---buttons--->

	<a href=""> <input type="submit" name="response" class="reply" value="SUBMIT RESPONSE" formaction="reply.php"></a>
		 <!---<button type="submit" formaction="reply.php" id="submit" > SUBMIT </button>&nbsp--->
		 <button type="reset"  id="submit" > CLEAR </button>	
	
	 	<br> 

	</form>


	 	<br> 
<table>
     	<tr>
     		<th> NAME</th>
     		<th> PHONE</th>
     		<th> EMAIL</th>
     		<th> MEMO</th>
     		<th> RESPONSE</th>
     	</tr>
   
     </table>


      <?php

$connection = mysqli_connect("sql8.freemysqlhosting.net", "sql8537860", "pjmbd5dlyx");
$db = mysqli_select_db($connection, 'sql8537860');

if (isset($_POST["search"])) {

	$sql = 'SELECT * FROM enquiry';

	$result = mysqli_query($connection,$sql);

	while ($row = mysqli_fetch_array($result)) {
?>
		<table>
			<tr>
			<td> <?php echo $row["name"] ?> </td>
			<td> <?php echo $row["phone"] ?> </td>
			<td> <?php echo $row["email"] ?> </td>
			<td> <?php echo $row["memo"] ?> </td>
			<td> <?php echo $row["response"] ?> </td>
			
		</tr>
	</table>
		
		<?php
	}
}
 

?>
<br>
</center>
</body>
</html>