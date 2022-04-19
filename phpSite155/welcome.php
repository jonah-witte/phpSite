<!--  I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Jonah Witte
CSC 155 -->

<?php
session_start();
include('library/htmlFunctions.php');

if(!isset($_SESSION['username']) and !isset($_SESSION['password'])){
  header('Location: http://www.csit.parkland.edu/~jwitte7/phpSite155/loginPage.php');
  exit;
}
?>
<!DOCTYPE html>
<html>

<head>
</head>

<body>

<?php
headerFunction();
?>

<p> Welcome Logged in User! </p>
<!--<p> Here are the links to the different item pages! </p>
<a href="http://www.csit.parkland.edu/~jwitte7/phpSite155/shoppingCart.php"> ShoppingCart <a> | 
<a href="http://www.csit.parkland.edu/~jwitte7/phpSite155/item1.php"> ItemOne <a> | 
<a href="http://www.csit.parkland.edu/~jwitte7/phpSite155/item2.php"> ItemTwo <a> |
<a href="http://www.csit.parkland.edu/~jwitte7/phpSite155/item3.php"> ItemThree <a> |
<a href="http://www.csit.parkland.edu/~jwitte7/phpSite155/item4.php"> ItemFour <a> |
-->
<?php
footerFunction();
?>

</body>
</html>