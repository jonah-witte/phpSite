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


<?php
footerFunction();
?>

</body>
</html>