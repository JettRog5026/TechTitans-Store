<?php
/*
    PHP file that connects to the MySQL database
    and selects product information
    Author: Jett Rogers
    Created On: 4/28/2024
*/
    $db_server = "localhost"; // server name
    $db_username = "root"; //username
    $db_password = ""; //password
    $db_name = "techtitans"; //name of database
    $conn = new mysqli($db_server, $db_username, $db_password, $db_name);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Set charset to UTF-8
    $conn->set_charset("utf8");
?>
