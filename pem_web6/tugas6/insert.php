<?php 
	$servername = "localhost"; 
	$username = "root"; 
	$password = ""; 
	$dbname = "butamu";

	// Create connection
	$conn = mysqli_connect($servername,$username, $password, $dbname);

	// Create connection
	if (!$conn) {
		die("Connection failed: ". mysqli_connect_error());
	}

	//insert data untuk buku tamu 
	$sql = "INSERT INTO bukutamu (ID_BT, NAMA, EMAIL, ISI) 
	VALUES ('R123','Riri','riri123@mail.com','Alumni SMAN3 angkatan 25'),
			('T456''Tutu','tutu456@mail.com','Alumni SMAN3 angkatan 24'),
			('K789''Keke','keke789@mail.com','Alumni SMAN3 angkatan 23')";

	 // pesan akan muncul apabila tabel dibuat dan data berhasil diinout
	if (mysqli_query($conn, $sql)) {
		echo "New Record created successfully";
	}
    // pesan akan muncul apabila terjadi error
    else {
		echo "Error" . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn); 
 ?>