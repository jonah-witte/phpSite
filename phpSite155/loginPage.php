<!--  I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Jonah Witte
CSC 155 -->


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
  $_SESSION['jellybeans'] = 0;
  $_SESSION['waterbottles'] = 0;
  $_SESSION['potatoes'] = 0;
  $_SESSION['nickname'] = "";
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

footerFunction()

?>
<form action="loginPage.php" method="POST">
  <label for="username">USERNAME:</label><br>
  <input type="text" id="username" name="username"><br>
  <label for="password">PASSWORD:</label><br>
  <input type="text" id="password" name="password"><br>

  <br> <input type="submit" name="submitbutton" value="Submit">

  <h4> Correct Username: jwitte7 </h4>
  <h4> Correct Password: 12345678 </h4>
</form>

<?php

if($youShallPass == False and isset($_POST['submitbutton'])){
  echo '<br>Incorrect Username or Password<br> Please Try Again.';
}

?>




</body>
</html>