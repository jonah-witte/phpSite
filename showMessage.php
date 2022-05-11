<!--  I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Jonah Witte
CSC 155 -->

<?php
session_start();
include('library/htmlFunctions.php');
checkSession();
headerFunction();
?>

<?php

// Create connection object
  $user = "jwitte7";  
  $conn = mysqli_connect("localhost",$user,$user,$user);
  if (mysqli_connect_errno()) {
    echo "<b>Failed to connect to MySQL: " . mysqli_connect_error() . "</b>";
  }
echo "<center> <h3>Your username is: " . $_SESSION['username'] . "</h3><br><hr></center>";

$formattedIdentifier = "'" . $_SESSION['username'] ."'";
$sql = "SELECT * FROM Messages WHERE to_user = $formattedIdentifier";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($userList = $result->fetch_assoc()) {
       echo "From: " . $userList['from_user'] . "<br>";
       echo "Message: " .$userList['message'] . "<br> <hr>";
    }
}
?>