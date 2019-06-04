<?php require 'functions.php';

	$conn = mysqli_connect("localhost","root","","web_programbarangmasuk");
	if( isset($_POST["submit"]) ) {

		if( tambah($_POST) > 0 ) {
			echo 	'<script>
						alert("Data Berhasil disimpan");
						document.location.href = "data_barang.php";
					</script>';
		}else {
			echo 	'<script>
						alert("Data Gagal disimpan!");
					</script>';
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>From Barang</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-3.4.1-dist/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">
</head>
<body>
	<div class="container-fluid">
		<div id="wrapper" class="wrapper">
			<div class="content">
				<h1>Form Barang</h1>
				<form action="" method="POST" class="form-horizontal">
					<div class="form-group">
					    <label for="kode" class="col-sm-2 control-label">Kode</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" name="kode" id="kode" >
					    </div>
					 </div>
					 <div class="form-group">
					    <label for="nama" class="col-sm-2 control-label">Nama Barang</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" name="nama" id="nama" >
					    </div>
					 </div>
					 <div class="form-group">
					    <label for="supplier" class="col-sm-2 control-label">Supplier</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" name="supplier" id="supplier" >
					    </div>
					 </div>
					 <div class="form-group">
					    <div class="col-sm-offset-10 col-sm-2">
					    	<button type="submit" name="submit" class="btn btn-primary">KIRIM</button>
					    </div>
					 </div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>