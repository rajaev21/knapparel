<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "knapparel";

    $connection = mysqli_connect($server, $username, $password);
    $testConnect = mysqli_select_db($connection, $database);

?>