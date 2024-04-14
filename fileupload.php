<?php
include("connection.php");
if(isset($_POST['submit']) && isset($_FILES['filetoupload'])){
    // $filetoupload = $_FILES["filetoupload"]["tmp_name"];
    
    echo "<pre>";
    print_r($_FILES['filetoupload']);
    echo "</pre>";

    $filename = $_FILES['filetoupload']['name'];
    $size = $_FILES['filetoupload']['size'];
    $tmp_name = $_FILES['filetoupload']['tmp_name'];

    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $type = $_POST['type'];

    echo $tmp_name;

    $statement = "INSERT INTO `product` (`tmp_name`,`name`,`price`,`description`,`type`)
    VALUES ('$tmp_name','$name','$price','$description','$type')";

    mysqli_query($connection,$statement);
    echo "Data inserted";
}
?>