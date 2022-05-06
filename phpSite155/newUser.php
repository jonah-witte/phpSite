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
  // Check connection
  if (mysqli_connect_errno()) {
    echo "<b>Failed to connect to MySQL: " . mysqli_connect_error() . "</b>";
  }
?>
<!DOCTYPE html>
<html>

<head>
</head>

<body>
<?php 

footerFunction()

?>

<form action="newUser.php" method="POST">
  <label for="username">USERNAME:</label><br>
  <input type="text" id="username" name="username"><br>
  <label for="newPassword">NEW PASSWORD:</label><br>
  <input type="text" id="newPassword" name="newPassword"><br>
  <label for="confirmPassword">CONFRIM PASSWORD:</label><br>
  <input type="text" id="confirmPassword" name="confirmPassword"><br>
  <label for="email">EMAIL:</label><br>
  <input type="text" id="email" name="email"><br>


  <br> <input type="submit" name="submitbutton" value="Create New User"> <br>

</form>
<a href="loginPage.php"><button type='button'>Cancel</button><a>



<?php
  if(isset($_POST['username'])){
    $enteredUsername = $_POST['username'];
  } else {
    $enteredUsername="";
  }
  if(isset($_POST['newPassword'])){
    $enteredPassword = $_POST['newPassword'];
  } else {
    $enteredPassword="";
  }
  if(isset($_POST['confirmPassword'])){
    $enteredConfirmedPassword = $_POST['confirmPassword'];
  } else {
    $enteredConfirmedPassword="";
  }
  if(isset($_POST['email'])){
    $enteredEmail = $_POST['email'];
  } else {
    $enteredEmail="";
  }
  
  if($enteredUsername != "" and $enteredPassword != "" and $enteredPassword == $enteredConfirmedPassword){

    if(isset($_POST['submitbutton'])){
  
       $formattedUsername = "'" . $enteredUsername ."'";
       $formattedPassword = "'" . password_hash($enteredPassword, PASSWORD_DEFAULT) ."'";
       $formattedEmail = "'" . $enteredEmail ."'";
       $sql = "INSERT INTO Users (Username, HashedPassword, Email) VALUES ($formattedUsername, $formattedPassword, $formattedEmail)";

       if ($conn->query($sql) === TRUE) {
         header('Location: http://www.csit.parkland.edu/~jwitte7/phpSite155/loginPage.php');
         exit;
       } else {
         echo "Error: " . $sql . "<br>" . $conn->error;
       }
    
  
    } 
}



?>


</body>
</html>