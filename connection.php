<?php
$conn = mysqli_connect("localhost","root","","farmplanner");


// require 'connection.php';

if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $phone = $_POST["phone"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $message = $_POST["message"];

  $query = "INSERT INTO contactdata VALUES('','$name','$phone','$email','$subject','$message')";
 mysqli_query($conn,$query);
 echo
 "
 <script> alert('Data Inserted Successfully'); 
 </script>
 
 ";
}

?>
