<?php
    $servername = "localhost";
    $usename = "root";
    $password = "";
    $dbname = "butamu";

    // Create connection
    $conn = mysqli_connect($servername, $usename, $password, $dbname);

    // Check connection
    If(!$conn){
        die("Connection failed: ") . mysqli_connect_error();
    }

    $sql = "CREATE TABLE bukutamu (ID_BT INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            NAMA VARCHAR(200) NOT NULL, 
            EMAIL VARCHAR(50) NOT NULL, 
            ISI TEXT)";

    if (mysqli_query($conn, $sql)){
        echo "New record created successfully";
    }
    else{
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>