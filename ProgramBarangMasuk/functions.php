<?php 

$conn = mysqli_connect("localhost","root","","web_programbarangmasuk");

	function query($query) {
		global $conn;
		$result = mysqli_query($conn, $query);
		$rows = [];
		while( $row = mysqli_fetch_assoc($result) ) {
			$rows[] = $row; 
		}
		return $rows;
	}

	function tambah($data) {
		global $conn;
		$kode = $data['kode'];
		$nama = $data['nama'];
		$supplier = $data['supplier'];

		// query insert data SQL
		$query = "INSERT INTO table_barang 
					VALUES
				('','$kode','$nama','$supplier')";
		
		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	}

	function hapus($id) {
		global $conn;
		mysqli_query($conn, "DELETE FROM table_barang WHERE id = $id");
		return mysqli_affected_rows($conn);
	}

	function ubah($data) {
		global $conn;

		$id = $data['id'];
		$kode = $data['kode'];
		$nama = $data['nama'];
		$supplier = $data['supplier'];

		// query insert data SQL
		$query = "UPDATE table_barang SET
					kode = $kode,
					nama_barang = '$nama',
					supplier = '$supplier',
					WHERE id = $id";
		
		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	}

?>