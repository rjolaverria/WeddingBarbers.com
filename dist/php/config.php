<?php
    $host = "localhost";
    $userName = "Olaverria";
    $password = "Olaverriawedding1";
    $dbName = "WeddingBarbers";

    // Create database connection
    $conn = new mysqli($host, $userName, $password, $dbName);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>