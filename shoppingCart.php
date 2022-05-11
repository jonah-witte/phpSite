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

checkSession();
?>
<!DOCTYPE html>
<html>

<head>
</head>

<body>



<?php
headerFunction();
?>
<?php
  echo '<p> You have ' . $_SESSION['jellybeans'] . ' Jellybeans in your cart </p>';
  echo '<p> You have ' . $_SESSION['waterbottles'] . ' Water Bottles in your cart </p>';
  echo '<p> You have ' . $_SESSION['potatoes'] . ' Potatoes in your cart </p>';
  
?>
<form>
    <br> <input type="submit" name="checkoutButton" value="Checkout">
</form>

<?php

if(isset($_GET['checkoutButton'])){
  $formattedUser= "'" . $_SESSION['username'] . "'";
  $formattedJellybeans= "'" . $_SESSION['jellybeans'] . "'";
  $formattedWaterBottles= "'" . $_SESSION['waterbottles'] . "'";
  $formattedPotatos= "'" . $_SESSION['potatoes'] . "'";
  $formattedDate = "'" . date('Y-m-d H:i:s') . "'"; 
  $sql = "INSERT INTO Checkout (from_user,jellybeans,water_bottles,potatos, checkout_date ) 
  VALUES ($formattedUser, $formattedJellybeans, $formattedWaterBottles, $formattedPotatos, $formattedDate)";

  if ($conn->query($sql) === TRUE) {
         echo 'You have successfully purchashed your items!';
         $_SESSION['jellybeans'] = 0;
         $_SESSION['waterbottles'] = 0;
         $_SESSION['potatoes'] = 0;
	 header('Location: http://www.csit.parkland.edu/~jwitte7/phpSite155/welcomePage.php');
         exit;
       } else {
         echo "Error: " . $sql . "<br>" . $conn->error;
       }


}

?>
<?php
footerFunction();

?>



</body>
</html>
