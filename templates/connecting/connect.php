<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Database Connection
$conn = new mysqli('localhost','root','','registration')
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into registration(name, email, subject, message)
    values(Ishwari,ishwaripawar@gmail.com,web,Hello)");
    $stmt->bind_param("ssss", $name,$email,$subject,$message);
    $stmt->execute();
    echo " registration successful";
    $stmt->close();
    $conn->close();
}
?>