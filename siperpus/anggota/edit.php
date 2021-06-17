<?php
include '../koneksi.php';
include '../aset/header.php';
$id = $_GET["id_anggota"];
$query = mysqli_query($koneksi, ("SELECT * FROM anggota where id_anggota = $id"));
$anggota = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Anggota</title>
</head>
<body>
	<div class="container">
   <div class="row mt-4">
    <div class="col-md-9">
     <div class="card">
      <div class="card-header">
      <h2>Edit Data Buku</h2>
					</div>
					<div class="card-body">
					<form action="proses-edit.php" method="post">
						<input type="hidden" name="id_anggota" value="<?= $anggota['id_anggota']; ?>">
							<div class="form-group">
							 <label>Nama</label>
							 <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama" required>
							</div>
							<div class="form-group">
								<label>Kelas</label>
 							 <input type="text" class="form-control" name="kelas" placeholder="Masukkan Kelas" required>
							</div>
							<div class="form-group">
								<label>No Telepon</label>
 							 <input type="text" class="form-control" name="telp" placeholder="Masukkan No Telepon" required>
							</div>
							<div class="form-group">
								<label>Username</label>
 							 <input type="text" class="form-control" name="username" placeholder="Masukkan Username" required>
							</div>
							<div class="form-group">
								<label>Password</label>
 							 <input type="password" class="form-control" name="password" placeholder="Masukkan Password" required>
							</div>
							<button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
					</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

<?php

include '../aset/footer.php';

?>
