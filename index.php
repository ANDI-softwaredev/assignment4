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
	<title>ANDI by Andile | hair & skin| </title>
</head>
<body>

	<a href="#modalbox"> <img src="icons\open-menu.png" class="menu" width="50px" height="50px" title="open menu options"></a> 
	<a href="#popupbox"> <img src="icons\user.png"  height="50px" width="50px" title="admin login" id="admin"> </a>

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

<div id="popupbox" class="popup">
	<div class="popupcontent">
<!-----form----->
		<form action="retrieve.php" class="form" method="POST" >
		
			<div class="input_ctrl">
	<input placeholder="Admin name" id="name" name="name" type="text" class="form_control"><br> <br>
	<div class="error"></div>
</div>

		<div class="input_ctrl">
	<input placeholder="admin@gmail.com" id="email" name="email" class="form_control"> <br><br>
	<div class="error"></div>
</div>


	<div class="input_ctrl">
	<input placeholder="password" id="phone" type="password" name="password" class="form_control"><br> <br>
	<div class="error"></div>
</div>
	
  <br> <br> <br>

  <?php include 'configuration.php';?>

     	<a href=""><input type="submit" name="search" class="submit" value="SHOW ENQUIRY"></a>
    
 </form>


		<a href="#" class="popupclose"> &times;</a>
	</div>
</div>



<header class="home">
	
<div class="landing"> 
	<!------<h1>ANDI by Andile</h1>------>

	<img src="img\home2.jpg" class="home_img">
	<img src="img\home_banner.png" id="title">
</div>	
</header>

<article class="home_content">
	<p><strong>
		ANDI by Andile is an online store catering for young professionals, college students and high school students in Harare.
The store was developed by <a href=" CV LINK" title="see Andile's CV" id="cv" target="_blank"> Andile Dube<img src="icons\avatar.png" class="icon" ></a> featuring a clothing and cosmetic line for the environmentally consious.
	</strong></p>
	

	<p> ANDI by Andile: slow fashion store. <br> In as much as we love fashion, <h1>it doesnt have to hurt the environment</h1> 
	<a href="" id="link"> <strong>Visit site to view the latest sustainable collection in store!</strong>
	</a></p>
</article>

<br>
<br>

	<img src="img\article_img.jpg" class="in_article_img">
	<img src="img\article_img2.jpg" class="in_article_img">
	<img src="img\article_img3.jpg" class="in_article_img">
	<br><br> <br>

<article>
	<p><strong>ANDI by Andile: hair & skin<br>
	Tired of products that claim to work (AND DONT WORK?) Are you having negative reactions to your creams and lotions? Dry skin? Or worse... is your hair not GROWING <img src="icons\shock.png" class="icon">
<br> Let the ANDI skin and hare care range take care of you<img src="icons\love-hand-drawn-heart-symbol-outline.png" class="icon"></strong></p>
</article>
<br>
<br>

<img src="img\article_img4.jpg" class="in_article_img" id="right">
	<img src="img\article_img5.jpg" class="in_article_img" id="right">
	<img src="img\article_img6.jpg" class="in_article_img" id="right">

	<footer>
<div class="footer_content"> 
		<a href="about.php"> 
				<img src="icons\contact.png" width="80px" height="80px" class="contact_menu"> 
		</a> <br>



We love to hear from you! <br>
</div>
</a>
	</footer>
</body>
</html>