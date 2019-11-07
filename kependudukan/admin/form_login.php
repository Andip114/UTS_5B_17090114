<!DOCTYPE html>
<html>
<head>
	
	<title>Login Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
	
	<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <img  alt="Penduduk" src="Kependudukan.png" width="42px" style="margin: 1px;padding: 0px color:white;">
    <a href="../main_menu.php" class="nav-item nav-link">Sistem Informasi Kependudukan</a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    
        <form class="form-inline ml-auto">
            <a href="../main_menu.php" class="nav-item nav-link">Kembali</a>
        </form>
        
    </div>
</nav>
<br/>
</head>
<body>
 
	<h1>LOGIN ADMIN</h1>
<center><?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?></center>
 
	<div class="kotak_login">
		 <center><img  alt="admin" src="admin.png" width="80px" style="margin: 1px;padding: 0px color:white;"></center>
		<form action="login_admin.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Masukan Username" required="required">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Masukan Password" required="required">
 
			<input type="submit" class="tombol_login" value="LOGIN">
 
			<br/>
			<br/>
			<center>
				<a class="link" href="../main_menu.php">kembali</a>
			</center>
		</form>
		
	</div>
 
 
</body>
</html>