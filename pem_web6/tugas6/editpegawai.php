<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="eopegawai";

    //create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    //check connection
    if(!$conn){
	    die("Connection failed: ". mysqli_connect_error());
    }

    // ambil data pegawai sesuai id di url
    $sql= "SELECT * FROM pegawai WHERE id=$_GET[id]";
    $result= mysqli_query($conn, $sql);
    $row=mysqli_fetch_array($result);

?>

<html>
    <head>
	    <title>Edit Data Pegawai</title>
    </head>
    <body>
        <center><h1> Form Edit Data Pegawai</h1></center>
        <form method="POST" action="" enctype="multipart/form-data">
	        <input type="hidden" name="id" id="id" value="<?php echo $row['id'];?>">
            <table cellpadding="5">
	            <tr>
		            <td><label for=nama> Nama : </label></td>
		            <td>
		                <input type="text" name="nama" id="nama" required value="
						<?php echo $row['nama'];?>">
                    </td>
	            </tr>
	            <tr>
		            <td><label for=email> Email : </label></td>
		            <td>
		                <input type="text" name="email" id="email" required value="
						<?php echo $row['email'];?>">
                    </td>
	            </tr>
		        <tr>
			        <td><label for=divisi> Departemen : </label></td>
			        <td>
		                <input type="text" name="departemen" id="departemen" required  
						value="<?php echo $row['departemen'];?>">
                    </td>
		        </tr>
            </table>
            <br>
            <button type="submit" name="submit">Edit</button>
        </form>
    </body>
</html>


<?php

	$servername="localhost";
	$username="root";
	$password="";
	$dbname="eopegawai";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	// Check Connection
	if(!$conn){
		die("Connection failed: ". mysqli_connect_error());
	}

	if(isset($_POST['submit'])){

		// Memperbaruhi data
		$sql= "UPDATE butamu SET nama='$_POST[nama]', email='$_POST[email]', 
		divisi='$_POST[divisi]',alamat='$_POST[alamat]', nohp='$_POST[nohp]' 
		WHERE id='$_GET[id]'";
		if(mysqli_query($conn, $sql)){
			echo "Data berhasil diubah";
			//memindahkan data
			echo "<meta HTTP-EQUIV='REFRESH' content='1; url=mysqli_fetch_assoc.php'>";
		} else{
			echo "Error: ". $sql ."<br>". mysqli_error($conn);
		}
	
		mysqli_close($conn);	
	}

?>