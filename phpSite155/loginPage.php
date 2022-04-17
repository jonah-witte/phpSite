<?php
session_start();
include('library/htmlFunctions.php');

$correctUser = 'jwitte7';
$correctPass = '12345678';


if(isset($_POST['username'])){
  $enteredUser = $_POST['username'];
} else {
  $enteredUser="";
}
if(isset($_POST['password'])){
  $enteredPass = $_POST['password'];
} else {
  $enteredPass="";
}

if($enteredUser == $correctUser and $enteredPass == $correctPass){
  $_SESSION['username'] = $enteredUser;
  $_SESSION['password'] = $enteredPass;
  $youShallPass = True;
  header('Location: http://www.csit.parkland.edu/~jwitte7/phpSite155/welcome.php');
  exit;
} else {
  $youShallPass = False;
  session_unset();
}




?>
<!DOCTYPE html>
<html>

<head>
</head>

<body>
<?php 

headerFunction()

?>
<form action="loginPage.php" method="POST">
  <label for="username">USERNAME:</label><br>
  <input type="text" id="username" name="username"><br>
  <label for="password">PASSWORD:</label><br>
  <input type="text" id="password" name="password"><br>

  <br> <input type="submit" name="submitbutton" value="Submit">
</form>

<?php

if($youShallPass == False and isset($_POST['submitbutton'])){
  echo '<br>YOU SHALL NOT PASS';
}

?>

<?php
footerFunction();
?>


</body>
</html>