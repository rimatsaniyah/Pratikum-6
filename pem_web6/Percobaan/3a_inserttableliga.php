<?php
    $servername = "localhost";
    $usename = "root";
    $password = "";
    $dbname = "myDB";

    // Create connection
    $conn = mysqli_connect($servername, $usename, $password, $dbname);

    // Check connection
    If(!$conn){
        die("Connection failed: ") . mysqli_connect_error();
    }

    $sql = "INSERT INTO liga (kode, negara, champion)
            VALUES ('Jer', 'Jerman', '4'),
                    ('spa', 'Spanyol', '3'),
                    ('Eng', 'English', '3')";

    if (mysqli_query($conn, $sql)){
        echo "New record created successfully";
    }
    else{
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
    ?>