<!DOCTYPE html>
<html>
    <body>
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "butamu";

            // Create connection
            $conn =mysqli_connect($servername, $username, $password, $dbname);
            
            // Create connection
            if (!$conn){
                die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "SELECT ID_BT, NAMA, EMAIL, ISI FROM bukutamu";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0){

                // output data of each row
                while ($row = mysqli_fetch_assoc($result)){
                    echo "ID: " . $row["ID_BT"]."- Nama : " . $row["NAMA"]."- Email : " . $row["EMAIL"]. "- Isi : " . $row["ISI"]."<br>";
                }
            }
            else{
                echo "0 results";
            }
        ?>
    </body>
</html>