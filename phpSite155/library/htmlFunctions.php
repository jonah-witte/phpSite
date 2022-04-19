<?php
function footerFunction(){
  echo '<center>Jonah Witte CSC-155-001</center>';
}

function headerFunction(){
  echo '<center>
  <a href="goodbye.php"> Log Out </a> | 
  <a href="shoppingCart.php"> ShoppingCart </a> |
  <a href="item1.php"> ItemOne </a> |
  <a href="item2.php"> ItemTwo </a> |
  <a href="item3.php"> ItemThree </a> 
  </center><hr>'; 
}

function checkSession(){
  if(!isset($_SESSION['username']) and !isset($_SESSION['password'])){
    header('Location: http://www.csit.parkland.edu/~jwitte7/phpSite155/loginPage.php');
    exit;
}
}
?>



