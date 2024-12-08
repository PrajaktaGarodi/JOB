<?php
    $SERVER = 'localhost';
    $username = 'root';
    $password = "";
    $dbname = 'job-excel-sheet';

    $conn = mysqli_connect($SERVER, $username, $password, $dbname);

    
    if (!$conn) {
        die("Connection failed: ". mysqli_connect_error());
    }
?>
