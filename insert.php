<link rel="stylesheet" type="text/css" href="stylesheet.css"><style type="text/css">
    body{
      background: url(img/shop_background.jpg);
    font-weight: bold;
      background-size: cover;
      font-size: 50px;
      font-family: 'Edwardian Script ITC';
      text-align: center;

    }
    .phpp{
      background: white;
    }
  </style>

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

<?php
  include("configuration.php");
   session_start();

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$memo = $_POST['memo'];

if (!empty($name) || !empty($phone) || !empty($email) || !empty($memo)) {
  $host = "sql8.freemysqlhosting.net";
  $dbUsername = "sql8537860";
  $dbPassword = "pjmbd5dlyx";
  $dbname = "sql8537860";
  $portno = 3306;


  //connection
  $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname, $portno);
  if (mysqli_connect_error()) {
    die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
  } else{
    $SELECT = "SELECT email, memo From enquiry Where email= ? AND memo=? Limit 1";
    $INSERT = "INSERT Into enquiry (name, phone, email, memo) values(?,?,?,?)";

    //prepare statement
$stmt = $conn->prepare($SELECT);
$stmt->bind_param("ss", $email, $memo);
$stmt->execute();
$stmt->bind_result($email,$memo);
$stmt->store_result();
$rnum = $stmt->num_rows;

if ($rnum==0) {
  $stmt->close();

  $stmt = $conn->prepare($INSERT);
    $stmt->bind_param("siss", $name, $phone, $email, $memo);
    $stmt->execute();
    echo "Enquiry sent successfully! Thank you for communicating with us <3";
} else{
  echo "Dear user, this enquiry has been sent an  already and is being processed!";
  }
  $stmt->close();
  $conn->close();
}
}
 else
echo "Please fill in missing fields!";
die()

?>
