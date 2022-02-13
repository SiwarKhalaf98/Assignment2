<?php session_start();

$uFirstname = $_SESSION['firstName'];
$uLastname = $_SESSION['lastName'];
$uemail = $_SESSION['email_mobile'];
$upassword = $_SESSION['password'];
$ubirthday = $_SESSION['birthday'];
$ubirthmonth = $_SESSION['birthmonth'];
$ubirthyear = $_SESSION['birthyear'];
$ugender = $_SESSION['gender'];

 echo "Your First Name is: $uFirstname <br>";
    echo "Your Last Name is: $uLastname<br>";
    echo "Your email or mobile number is: $uemail <br>";
    echo "Your password is: $upassword <br>";
    echo "Your birth day is: $ubirthday <br>";
    echo "Your birth month is: $ubirthmonth <br>";
    echo "Your birth year is: $ubirthyear <br>";
    echo "Your gender is: $ugender <br>";
    echo "Welcome! <br>";
?> 
<a href="logout.php">Log Out</a>