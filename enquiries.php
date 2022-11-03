<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="hair growth, skin care, length retention, hydration, natural products">
	<meta name="author" content="Unicorn ANDI">
<!--------<a href="https://www.flaticon.com/free-icons/open-menu" title="open menu icons">Open menu icons created by Pixel perfect - Flaticon</a>
		<a href="https://www.flaticon.com/free-icons/user-interface" title="user interface icons">User interface icons created by paonkz - Flaticon</a>--------->
	<!-----external links------>
	<link rel="stylesheet" type="text/css" href="stylesheet.css"> 
	<link rel="stylesheet" href="script.js">
	<link rel="icon"  href="img\favicon.png">
	<title>ANDI by Andile | enquiries | </title>
</head>
<body>
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
		Enquiries <img src="icons\search.png" width="80px" height="80px">
	</div>

	<div class="enquiry_title">
		<h1> Talk to Us</h1>
		<h2> We are ready to serve you!</h2>
		
	</div>

		<form action="insert.php" id="form" method="POST">
		
			<div class="input_ctrl">
	<input placeholder="Andile Dube" id="name" name="name" type="text" class="form_control"><br> <br>
	<div class="error"></div>
</div>

	
	<div class="input_ctrl">
	<input placeholder="0780982626" id="phone" type="n" name="phone" class="form_control"><br> <br>
	<div class="error"></div>
</div>


	<div class="input_ctrl">
	<input placeholder="dubeandilet@gmail.com" id="email" name="email" class="form_control"> <br><br>
	<div class="error"></div>
</div>

	
	<div class="input_ctrl">
     <textarea id="memo" class="form_control" name="memo" rows="3" placeholder="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
     tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
     consequat."></textarea> 
     <div class="error"></div>
 </div>
  <br> <br>

     <a href=""></a>
     <button type="submit" id="submit" > SUBMIT </button>&nbsp
     <button type="reset"  id="submit" > CLEAR </button>
	&nbsp
     <button type=""  id="submit" formaction="check.php" name="search" > CHECK ON ENQUIRY </button>
</form>
</body>