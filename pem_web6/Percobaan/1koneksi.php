<html>
    <head>
        <title> Koneksi Database MySQL </title>
    </head>
    <body>
        <h1>Demo Koneksi database MySQL</h1>
        <?php
            $con = mysqli_connect("localhost","root","","myDB");

            // Check connection
            If (mysqli_connect_error()) {
                echo "Failed to connect to MySQL: " . mysqli_connect_error()
                    ;
                exit();
            }
        ?>
    </body>
</html>