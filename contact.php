<?php
$connect =  mysqli_connect("localhost","root","","cyberscape");

$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["Phone"];
$subject = $_POST["Subject"];
$message = $_POST["message"];

$sql = "INSERT INTO contact(name,email,phone,subject,message) VALUES('{$name}','{$email}','{$phone}','{$subject}','{$message}')";

if(mysqli_query($connect,$sql)){
    header("location:http://localhost/cyberscape/");
}
?>