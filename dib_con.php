<?php
    date_default_timezone_set('Asia/Dhaka');

    define('HOST','localhost');
    define('USERNAME','root');
    define('PASSWORD','');
    define('DATABASE','st_information');

    // Create connection
    $conn = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

?>