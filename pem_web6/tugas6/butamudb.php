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
    $sql = "CREATE DATABASE butamu";

    // pesan apabila database berhasil dibuat
    If (mysqli_query($conn, $sql)){
        echo "Database created successfully";
    }

    // pesan apabila database gagal dibuat 
    else{
        echo "Error creating database: " . mysqli_error($conn);
    }
    
    mysqli_close($conn);
?>
