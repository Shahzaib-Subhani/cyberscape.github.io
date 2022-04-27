<?php

$connect =  mysqli_connect("localhost","root","","cyberscape");
session_start();

session_unset();

session_destroy();

header("Location: http://localhost/cyberscape/");
?>