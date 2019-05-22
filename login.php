<?php
//Ta detta från dbLOGIN.php eller vad den nu heter
// includes all he classes, session_start and the html head.
include("include/bootstrap.php");

$Blowfish_Pre = '$2a$05$';
$Blowfish_End = '$';

$email = mysqli_real_escape_string($conn, $_POST['email']);
$pwd = mysqli_real_escape_string($conn, $_POST['password']);

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

//Verify a user’s password
$get = "SELECT salt, hashed_password FROM User WHERE email='$email'";
$result = mysqli_query($conn->conn,$get);
$row = mysqli_fetch_assoc($result);
$hashed_pass = crypt($pwd, $Blowfish_Pre . $row['salt'] . $Blowfish_End);
if ($hashed_pass == $row['hashed_password']) {
    echo("PASSWORD CORRECT");
    // HÄR LÄGGER VI IN HEADER LOCATION
} else {
    echo("PASSWORD NOT CORRECT");
    // HÄR LÄGGER VI IN HEADER LOCATION
    exit();
}
?>
