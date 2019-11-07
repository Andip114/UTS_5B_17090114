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
    <img  alt="Penduduk" src="Kependudukan.png" width="42px" style="margin: 1px;padding: 0px color:white;">
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
    
    <!DOCTYPE html>
<html>
<head>
    <title>SI Kependudukan</title>
</head>

<body>
    <br/>

<center>    <nav>
        <ul>
            <img alt="Penduduk" src="penduduk.jfif"/>
            <h3><a href="tambah_penduduk.php">Tambah Data Penduduk</a></h3>

            <img alt="Kelahiran" src="Kelahiran.jpg"/>
            <h3><a href="tambah_kelahiran.php">Tambah Data Kelahiran</a></h3>

            <img alt="Kematian" src="kematian.jpg"/>
            <h3><a href="tambah_kematian.php">Tambah Data Kematian</a></h3>

            <img alt="Pendatang" src="pendatang.jpg"/>
            <h3><a href="tambah_pendatang.php">Tambah Data Pendatang</a></h3>
        </ul>
    </nav>
</center>

    </body>
    
</html>
</body>
</html>