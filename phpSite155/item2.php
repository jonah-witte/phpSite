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

<p> BUY YOUR WATER BOTTLES HERE </p>
<form method="POST">
<input type="submit" name="buyOne" value="Buy One">
<input type="submit" name="removeOne" value="Remove One">
<input type="submit" name="removeAll" value="Remove All">
</form>
<?php
  if(isset($_POST['buyOne'])){
    $_SESSION['waterbottles'] = $_SESSION['waterbottles'] + 1;
  }
  if(isset($_POST['removeOne'])){
     if($_SESSION['waterbottles'] > 0){
       $_SESSION['waterbottles'] = $_SESSION['waterbottles'] - 1;
     }
  }
  if(isset($_POST['removeAll'])){
    $_SESSION['waterbottles'] = 0;
  }
  echo '<p> You have ' . $_SESSION['waterbottles'] . ' Water Bottles in your cart </p>';
?>

<?php
footerFunction();
?>

</body>
</html>