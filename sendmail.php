<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "astro";

// Create Connection

$con = mysqli_connect($servername, $username, $password, $dbname);

if(mysqli_connect_errno()){
  echo 'Failed to Connect';
  exit();
}
// echo "Connection Success";


// Submit Form Data
if(isset($_POST['submit'])){

  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $sql = "INSERT INTO `contact form` (`name`,`email`,`phone`,`subject`,`message`)
  VALUES ('$name', '$email', '$phone', '$subject', '$message')";
  
  if(mysqli_query($con, $sql)){
      echo "<h2>Form Submitted Successfully😊</h2>";
  }
  else {
      echo "Error: " . $sql . ":-" . mysqli_error($con);
   }

   mysqli_close($con);
}
  
?>

<!-- $conn = new mysqli("localhost", "root", " ", "world");
  if($conn->connect_error){
    echo('Connection Failed: ' .$conn->connect_error);
  }
  else{
    $stmt = $conn->prepare("insert into contact form(firstname, lastname, email, phone, message) values (?,?,?,?,?)");
    $stmt->bind_param("sssis",$firstname, $lastname, $email, $phone, $message);
    $stmt->execute();
    // $stmt->store_result();
    echo "Registration Successful";
    $stmt->close();
    $conn->close();
  }

if(isset($_POST['submit'])){
  $to = "info@worldexhibitions.in";
  $name1 = $_POST['firstname'];
  $name2 = $_POST['lastname'];
  $from = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];
  $subject = "Contact Form Details";
  $headers = "MIME-Version: 1.0" . "\r\n"; 
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  $headers = "From:" . $from . "\r\n";
  $result = mail($to,$subject,$message,$headers);

  if($result){
      echo '<script type="text/javascript">alert("Your Message was sent Successfully!");</script>';

      echo '<script type="text/javascript">window.location.href = window.location.href;</script>';
  }

  else{
      echo '<script type="text/javascript">alert("Sorry! Message not sent. Try again Later.");</script>';
  echo '<script type="text/javascript">window.location.href = window.location.href;</script>';
  }
} -->
