<?php
//memasukkan file config.php
include('../config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>SI Kependudukan</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	
</head>
<body>

 
	<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <img  alt="Penduduk" src="kependudukan.png" width="42px" style="margin: 1px;padding: 0px color:white;">
    <a href="../main_menu.php" class="nav-item nav-link">Sistem Informasi Kependudukan</a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav">
            <a href="index.php" class="nav-item nav-link active">Home</a>
            <a href="data.php" class="nav-item nav-link active">Data</a>
            <a href="tambah_data.php" class="nav-item nav-link active">Tambah Data</a>

        </div>
        <form class="form-inline ml-auto">
            <input type="text" class="form-control mr-sm-2" placeholder="Search">
            <button type="submit" class="btn btn-outline-light">Search</button>
        </form>
        <a href="#" class="nav-item nav-link">Admin</a>
        <a href="form_login.php" class="nav-item nav-link">| Logout</a>
    </div>
</nav>
	
	
	<div class="container" style="margin-top:20px">
		<b><h2>Tambah Pendatang</h2></b>	
		<hr>
		<?php
		if(isset($_POST['submit'])){
			$nama			= $_POST['nama'];
			$tanggal_datang	= $_POST['tanggal_datang'];
			$alamat_asal	= $_POST['alamat_asal'];
			$alamat_tujuan	= $_POST['alamat_tujuan'];
			$keterangan	= $_POST['keterangan'];
			$cek = mysqli_query($koneksi, "SELECT * FROM data_pendatang WHERE id='$id'") or die(mysqli_error($koneksi));

			if(mysqli_num_rows($cek) == 0){
				$sql = mysqli_query($koneksi, "INSERT INTO data_pendatang(nama, tanggal_datang, alamat_asal, alamat_tujuan, keterangan) VALUES('$nama', '$tanggal_datang', '$alamat_asal','$alamat_tujuan','$keterangan')") or die(mysqli_error($koneksi));
				if($sql){
					echo '<script>alert("Berhasil menambahkan data."); document.location="list_pendatang.php";</script>';
				}else{
					echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
				}
			}else{
				echo '<div class="alert alert-warning">Gagal, nama sudah terdaftar.</div>';
			}
		}
		?>
		
		<form action="tambah_pendatang.php" method="post">
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">NAMA</label>
				<div class="col-sm-10">
					<input type="text" name="nama" class="form-control" size="10" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">TANGGAL DATANG</label>
				<div class="col-sm-10">
					<input type="date" name="tanggal_datang" class="form-control" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">ALAMAT ASAL</label>
				<div class="col-sm-10">
					<input type="text" name="alamat_asal" class="form-control" required>
				</div>	
			</div>
				<div class="form-group row">
				<label class="col-sm-2 col-form-label">ALAMAT TUJUAN</label>
				<div class="col-sm-10">
					<input type="text" name="alamat_tujuan" class="form-control" required>
				</div>
			</div>
				<div class="form-group row">
				<label class="col-sm-2 col-form-label">KETERANGAN</label>
				<div class="col-sm-10">
					<input type="text" name="keterangan" class="form-control" required>
				</div>
			</div>
			<div class="form-group row">
                <label class="col-sm-2 col-form-label">&nbsp;</label>
                <div class="col-sm-10">
                    <input type="submit" name="submit" class="btn btn-primary" value="SIMPAN">
				</div>
			</div>
		</form>
		
	</div>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	
</body>
</html>