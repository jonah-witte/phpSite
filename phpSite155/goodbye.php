<!--  I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Jonah Witte
CSC 155 -->

<?php
session_start();
include('library/htmlFunctions.php');
session_destroy();

?>
<!DOCTYPE html>
<html>

<head>
</head>

<body>

<?php
headerFunction();
?>

<p> You are now logged out </p>
<p> To log back in, click <a href="loginPage.php"> Here <a> </p>

<?php
footerFunction();
?>

</body>
</html>