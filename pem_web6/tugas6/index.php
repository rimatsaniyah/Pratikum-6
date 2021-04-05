<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "eopegawai";

    //create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    //check connection
    if(!$conn){
        die("Connection failed: ". mysqli_connect_error());
    }

    //input data
    $sql = "SELECT * FROM eopegawai";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        
    }
    else{
        echo "0 result";
    }
    mysqli_close($conn);
?>

<html>
    <head>
        <title>Data Pegawai</title>
    </head>
    <body>
        <!-- menata tabel -->
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Departemen</th>
            </tr>
            <tr>
                <?php
                    while ($row = mysqli_fetch_assoc($result));
                ?>
            </tr>
            <tr>
                <td><?= $row["id"];?></td>
                <td>
                    <a href="editpegawai.php?id=<?= $row["id"]; ?>">Edit</a>
                    <a href="deletepegawao.php?id=<?= $row["id"]; ?>">Hapus</a>
                </td>
                <td><?= $row["nama"];?></td>
                <td><?= $row["email"];?></td>
                <td><?= $row["departemen"];?></td>
            </tr>
        </table>
        <br>
        <br>
        <table cellspadding="10">
            <tr>
                <form action="tambahpegawai.php">
                    <button>Tambah</button>
                </form>
            </tr>
        </table>
    </body>
</html>