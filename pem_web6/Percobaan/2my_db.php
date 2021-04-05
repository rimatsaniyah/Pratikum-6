<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password);
    
    // Check connection
    If (!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }

    // Create database
    $sql = "CREATE DATABASE MyDB";
    If (mysqli_query($conn, $sql)){
        echo "Database created successfully";
    }
    else{
        echo "Error creating database: " . mysqli_error($conn);
    }
    
    mysqli_close($conn);
?>