<?php
include("connection.php");

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];
    $address = $_POST['address'];
    $number = $_POST['number'];
    $type = 3;
    if($password1 === $password2){
// 1 admin ,2 moderator, 3 customer
    $statement = "INSERT INTO `user` (`type`,`username`,`password`,`address`,`phone_number`)
    VALUES ('$type','$username','$password1','$address','$number')";

    mysqli_query($connection,$statement);
    echo "Data inserted";
    } else {
        echo "Password does not match!";
    }

}

?>