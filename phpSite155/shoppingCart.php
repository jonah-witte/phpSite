<!--  I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Jonah Witte
CSC 155 -->



<?php
session_start();
include('library/htmlFunctions.php');

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

<?php
footerFunction();
?>

</body>
</html>