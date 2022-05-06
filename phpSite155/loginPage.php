<!--  I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Jonah Witte
CSC 155 -->


<?php
session_start();
include('library/htmlFunctions.php');

// Create connection object
  $user = "jwitte7";  
  $conn = mysqli_connect("localhost",$user,$user,$user);
  if (mysqli_connect_errno()) {
    echo "<b>Failed to connect to MySQL: " . mysqli_connect_error() . "</b>";
  }



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
if(isset($_POST['submitbutton'])){
  $formattedUser = "'".$enteredUser . "'";
  $sql = "SELECT * FROM Users WHERE Username = $formattedUser";
  $result = $conn->query($sql);

  if ($result->num_rows !=1) {
     echo 'Database Error';
     exit;
  }
  $userInfo = $result->fetch_assoc();
  $passCorrect = password_verify($enteredPass,$userInfo['HashedPassword']);
  if($passCorrect == true){
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
     echo '<br>Incorrect Username or Password<br> Please Try Again.';
     session_unset();
  }

  
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

  <br> <input type="submit" name="submitbutton" value="Login">

</form>
<a href="newUser.php"> Click Here to Make a New User! <a>





</body>
</html>
