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

headerFunction()

?>


<?php
$listOfUsernames = array();
     $sql = "SELECT * FROM Users";
     $result = $conn->query($sql);

     if ($result->num_rows > 0) {
       // output data of each row
       while($userList = $result->fetch_assoc()) {
         array_push($listOfUsernames, $userList['Username']);
       }
     }  
?>




 <form action='newMessage.php' method='POST'>
  <label for='usernames'>Select a Username to send a message to:</label><br>
  <select name='usernames' id='usernames'>
    
    <?php 
      for($i=0;$i< count($listOfUsernames); $i++){
        echo "<option value=" ."'". $listOfUsernames[$i] ."'" . "> $listOfUsernames[$i] </option>";
      }
    ?>

  </select>
  <br><label for='message'>Write your message here:</label><br>
  <textarea id='message' name='message' rows='4' cols='50'>
What do you want to say?
  </textarea>


  <br> <input type= 'submit' name='submitbutton' value='Send Message'> <br>

 </form>

<?php
  if(isset($_POST['submitbutton'])){
   $formattedFromUser = "'" . $_SESSION['username'] . "'";
   $formattedToUser = "'" . $_POST['usernames'] . "'";
   $formattedMessage = htmlspecialchars("'" . $_POST['message'] . "'");
   $formattedDate = "'" . date('Y-m-d H:i:s') . "'"; 
    $sql = "INSERT INTO Messages (from_user,to_user,message,created_date) 
  VALUES ($formattedFromUser, $formattedToUser, $formattedMessage, $formattedDate)";

  if ($conn->query($sql) === TRUE) {
         echo 'Your message has been sent';
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