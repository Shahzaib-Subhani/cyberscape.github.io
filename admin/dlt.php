<?php

$connect =  mysqli_connect("localhost","root","","cyberscape");
if(isset($_POST["dlt"])){
    $id = $_POST["id"];

    $dsql = "DELETE FROM contact Where id = '{$id}'";
    if(mysqli_query($connect,$dsql)){
        header("location:http://localhost/cyberscape/admin/");
        
    }
}


?>