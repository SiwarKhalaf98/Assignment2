<?php error_reporting(0); ?>
<?php session_start();
/*
echo '<pre>';
print_r($_POST);
echo '</pre>';
*/



$firstName = htmlspecialchars($_POST['first-name']);
echo $firstName;
$lastName = htmlspecialchars($_POST['last-name']);
$email_mobile = htmlspecialchars($_POST['email-mobile']);
$password = htmlspecialchars($_POST['up-password']);
$birthday = $_POST['birth-day'];
$birthmonth = $_POST['birth-month'];
$birthyear = $_POST['birth-year'];
$gender = $_POST['gen'];
$errors=[];
$firstNameLen = strlen($firstName);
$lastNameLen = strlen($lastName);
$passwordLen = strlen($password);

//First name validation
if(empty($firstName)){
    $errors[] = '<strong>Warning!</strong> First name is required !';
}
elseif($firstNameLen<4 || $firstNameLen>30){
    $errors[] = '<strong>Warning!</strong> First name must be between 4 and 30 letters !';
}
//Last name validation
if(empty($lastName)){
    $errors[] = '<strong>Warning!</strong> Last name is required !';
}
elseif($lastNameLen<4 || $lastNameLen>30){
    $errors[] = '<strong>Warning!</strong> Last name must be between 4 and 30 letters !';
}
//Email validation
if(empty($email_mobile)){
    $errors[] = '<strong>Warning!</strong> Email or mobile number is required !';
}
//Password validation
if(empty($password)){
    $errors[] = '<strong>Warning!</strong> Password is required !';
}
elseif($passwordLen<8 || $passwordLen>30){
    $errors[] = '<strong>Warning!</strong> Password must be between 8 and 30 !';
}
//Birth day validation
if(empty($birthday)){
    $errors[] = '<strong>Warning!</strong> Birth day is required !';
}
//Birth month validation
if(empty($birthmonth)){
    $errors[] = '<strong>Warning!</strong> Birth month is required !';
}
//Birth year validation
if(empty($birthyear)){
    $errors[] = '<strong>Warning!</strong> Birth year is required !';
}
//Gender validation
if(empty($gender)){
    $errors[] = '<strong>Warning!</strong> Gender is required !';
}
elseif($gender == "male" || $gender == "female"){
    $gender = $_POST['gen'];
    //$errors[] = '<strong>Warning!</strong> Please select a valid gender.';
}
else{
    $errors[] = '<strong>Warning!</strong> Please select a valid gender.';
}

if(!empty($errors)){
    $_SESSION['errors'] = $errors;

    header("location:sign.php");
}

elseif(isset($_POST['register'])){
    $_SESSION['firstName'] = $firstName;
    $_SESSION['lastName'] = $lastName;
    $_SESSION['email_mobile'] = $email_mobile;
    $_SESSION['password'] = $password;
    $_SESSION['birthday'] = $birthday;
    $_SESSION['birthmonth'] = $birthmonth;
    $_SESSION['birthyear'] = $birthyear;
    $_SESSION['gender'] = $gender;
    $_SESSION['register'] = true;
    header('location:home.php');
   

}
/*
else{
    
    header('location:home.php');

}
*/
/*else
echo "error 404!";
*/
?>