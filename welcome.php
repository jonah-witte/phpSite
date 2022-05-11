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
<form method="POST">
  <label for="nickname">Enter a nickname:</label><br>
  <input type="text" id="nickname" name="nickname"><br>
  <br><input type="submit" name="nicknameSubmit" value= "Submit">
</form>
<?php
footerFunction();
?>

</body>
</html>
