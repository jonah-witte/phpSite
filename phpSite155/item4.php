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

<p> This is a place holder for Item page FOUR </p>
<?php
footerFunction();
?>

</body>
</html>