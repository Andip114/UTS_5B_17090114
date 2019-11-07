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
        <b><h2>Edit Kematian</h2></b>    
        <hr>

        <?php
        //jika sudah mendapatkan parameter GET id dari URL
        if(isset($_GET['id'])){
            //membuat variabel $id untuk menyimpan id dari GET id di URL
            $id = $_GET['id'];
            
            $select = mysqli_query($koneksi, "SELECT * FROM data_kematian WHERE id='$id'") or die(mysqli_error($koneksi));
            
            //jika hasil query = 0 maka muncul pesan error
            if(mysqli_num_rows($select) == 0){
                echo '<div class="alert alert-warning">ID tidak ada dalam database.</div>';
                exit();
            //jika hasil query > 0
            }else{
                //membuat variabel $data dan menyimpan data row dari query
                $data = mysqli_fetch_assoc($select);
            }
        }
        ?>
        <?php
        //jika tombol simpan di tekan/klik
        if(isset($_POST['submit'])){
            $NIK           = $_POST['NIK'];
            $nama           = $_POST['nama'];
            $umur           = $_POST['umur'];
            $dusun           = $_POST['dusun'];
            $alamat           = $_POST['alamat'];
            $jenis_kelamin  = $_POST['jenis_kelamin'];
            $hari_meninggal     = $_POST['hari_meninggal'];
            $tanggal_meninggal  = $_POST['tanggal_meninggal'];
            $tempat_meninggal     = $_POST['tempat_meninggal'];
            $sebab_meninggal     = $_POST['sebab_meninggal'];

            $sql = mysqli_query($koneksi, "UPDATE data_kematian SET NIK='$NIK', nama='$nama', dusun='$dusun', alamat='$alamat', jenis_kelamin='$jenis_kelamin', hari_meninggal='$hari_meninggal', tanggal_meninggal='$tanggal_meninggal', tempat_meninggal='$tempat_meninggal', sebab_meninggal='$sebab_meninggal' WHERE id='$id'") or die(mysqli_error($koneksi));
            
            if($sql){
                echo '<script>alert("Berhasil menyimpan data."); document.location="list_kematian.php?id='.$id.'";</script>';
            }else{
                echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
            }
        }
        ?>

        <form action="edit_kematian.php?id=<?php echo $id; ?>" method="post">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">NIK</label>
                <div class="col-sm-10">
                    <input type="text" name="NIK" class="form-control" size="10" value="<?php echo $data['NIK']; ?>" readonly required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">NAMA</label>
                <div class="col-sm-10">
                    <input type="text" name="nama" class="form-control" value="<?php echo $data['nama']; ?>" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">UMUR</label>
                <div class="col-sm-10">
                    <input type="text" name="umur" class="form-control" value="<?php echo $data['umur']; ?>" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">DUSUN</label>
                <div class="col-sm-10">
                    <input type="text" name="dusun" class="form-control" value="<?php echo $data['dusun']; ?>" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">ALAMAT</label>
                <div class="col-sm-10">
                    <input type="text" name="alamat" class="form-control" value="<?php echo $data['alamat']; ?>" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">JENIS KELAMIN</label>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="jenis_kelamin" value="LAKI-LAKI" <?php if($data['jenis_kelamin'] == 'LAKI-LAKI'){ echo 'checked'; } ?> required>
                        <label class="form-check-label">LAKI-LAKI</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="jenis_kelamin" value="PEREMPUAN" <?php if($data['jenis_kelamin'] == 'PEREMPUAN'){ echo 'checked'; } ?> required>
                        <label class="form-check-label">PEREMPUAN</label>
                    </div>
                </div>
            </div>
             <div class="form-group row">
                <label class="col-sm-2 col-form-label">HARI MENINGGAL</label>
                <div class="col-sm-10">
                    <input type="text" name="hari_meninggal" class="form-control" value="<?php echo $data['hari_meninggal']; ?>" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">TANGGAL MENINGGAL</label>
                <div class="col-sm-10">
                    <input type="date" name="tanggal_meninggal" class="form-control" value="<?php echo $data['tanggal_meninggal']; ?>" required>
                </div>
            </div>
             <div class="form-group row">
                <label class="col-sm-2 col-form-label">TEMPAT MENINGGAL</label>
                <div class="col-sm-10">
                    <input type="text" name="tempat_meninggal" class="form-control" value="<?php echo $data['tempat_meninggal']; ?>" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">SEBAB MENINGGAL</label>
                <div class="col-sm-10">
                    <input type="text" name="sebab_meninggal" class="form-control" value="<?php echo $data['sebab_meninggal']; ?>" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">&nbsp;</label>
                <div class="col-sm-10">
                    <input type="submit" name="submit" class="btn btn-primary" value="SIMPAN">
                    <a href="index.php" class="btn btn-warning">KEMBALI</a>
                </div>
            </div>
        </form>
        
    </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
</body>
</html>