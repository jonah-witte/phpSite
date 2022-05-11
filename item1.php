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

<p> BUY YOUR JELLYBEANS HERE </p>
<form method="POST">
<input type="submit" name="buyOne" value="Buy One">
<input type="submit" name="removeOne" value="Remove One">
<input type="submit" name="removeAll" value="Remove All">
</form>
<?php
  if(isset($_POST['buyOne'])){
    $_SESSION['jellybeans'] = $_SESSION['jellybeans'] + 1;
  }
  if(isset($_POST['removeOne'])){
     if($_SESSION['jellybeans'] > 0){
       $_SESSION['jellybeans'] = $_SESSION['jellybeans'] - 1;
     }
  }
  if(isset($_POST['removeAll'])){
    $_SESSION['jellybeans'] = 0;
  }
  echo '<p> You have ' . $_SESSION['jellybeans'] . ' Jellybeans in your cart </p>';
?>

<?php
footerFunction();
?>

</body>
</html>