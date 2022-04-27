<?php
session_start();
include_once 'config.php';
if($_SERVER['REQUEST_METHOD']=='POST')
{
    
        $username = $_SESSION['username'];
        $name=$_POST['name'];
        $email_id = $_POST['email_id'];
        $phone=$_POST['phone'];
        $description = $_POST['description'];
        $sql= "INSERT INTO `contactus` (`username`,`name`, `email_id`,`description`, `phone`) VALUES ('$username','$name','$email_id','$description', '$phone')";
        mysqli_query($conn, $sql);
        echo '<script>alert("Your Query has been recorded successfully")</script>';
        
}   

?>