<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "pushnotification";

    $con = new mysqli($host, $username, $password, $databaseName);

    $con->set_charset("utf8");
?>