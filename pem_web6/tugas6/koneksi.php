<html>
<head>
    <title> Koneksi Database MySQL </title>
</head>
<body>
    <h1>Demo Koneksi database MySQL</h1>
	<?php 
	
	// Check connection
	$con = mysqli_connect("localhost","root","","butamu"); 
		
		if (mysqli_connect_error()) {
            // pesan apabila gagal terkoneksi
			echo "Failed to connect MySQL :". mysqli_connect_error(); 
			exit();
		}
	 ?>
</body>
</html>