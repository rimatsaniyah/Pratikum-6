<?php 
    $conn = mysqli_connect("localhost","root","","eopegawai");
    
    function query($query){
	    global $conn;
	    $result = mysqli_query($conn, $query);
	    $rows = [];
	    
        while ( $row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
    	}
	
        return $row;
    }

    function tambah($data){
	    global $conn;
        $nama = $data["nama"];
        $email = $data["email"];
        $departemen = $data["departemen"];

        $query = "INSERT INTO eopegawai values ('$id','$nama','$email','$departemen')";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function hapus ($id){
	    global $conn;
	    mysqli_query($conn, "DELETE FROM eopegawai where id = $id");
	 
        return mysqli_affected_rows($conn);
    }
?>