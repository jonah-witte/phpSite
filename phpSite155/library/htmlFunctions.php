<?php
function footerFunction(){
  echo '<center>Jonah Witte CSC-155-001</center>';
  echo '<center><img src="/~jwitte7/phpSite155/images/red.jpg" height="100"></center><br>';
}

function headerFunction(){
  if(isset($_POST['nicknameSubmit'])){
    $_SESSION['nickname'] = $_POST['nickname'];
  } 
  echo '<center> Welcome ' . $_SESSION['nickname'] . '</center>';
  echo '<center><img src="/~jwitte7/phpSite155/images/flowers.jpg" height="100"></center><br>';
  echo '<center>
  <a href="goodbye.php"> Log Out </a> | 
  <a href="welcome.php"> Home </a> |
  <a href="item1.php"> ItemOne </a> |
  <a href="item2.php"> ItemTwo </a> |
  <a href="item3.php"> ItemThree </a> |
  <a href="shoppingCart.php"> ShoppingCart </a> | 
  <a href="printUsers.php"> User List </a> | 
  </center><hr>'; 

}

function checkSession(){
  if(!isset($_SESSION['username']) and !isset($_SESSION['password'])){
    header('Location: http://www.csit.parkland.edu/~jwitte7/phpSite155/loginPage.php');
    exit;
  }
}
function createConnection(){
  // Create connection object
  $user = "jwitte7";  
  $conn = mysqli_connect("localhost",$user,$user,$user);
  if (mysqli_connect_errno()) {
    echo "<b>Failed to connect to MySQL: " . mysqli_connect_error() . "</b>";
  }
}


?>



