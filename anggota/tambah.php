<?php
include '../aset/header.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Anggota</title>
</head>
<body>
	<div class="container">
	 <div class="row mt-4">
	  <div class="col-md-9">
	   <div class="card">
	    <div class="card-header">
						<h2 class="card-title"><i class="fas fas fa-book"></i> Tambah Anggota</h2>
					</div>
					<div class="card-body">
			         <form method="post" action="proses-tambah.php">
			                <div class="form-group">
			                 <label>Nama</label>
			                 <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama" required>
			                </div>

			                <div class="form-group">
			                 <label>Kelas</label>
			                 <input type="text" class="form-control" name="kelas" placeholder="Masukkan Kelas" required>
			                </div>

			                <div class="form-group">
			                 <label>No. Telepon</label>
			                 <input type="text" class="form-control" name="telp" placeholder="Masukkan No Telpon" required>
			                </div>

			                <div class="form-group">
			                 <label>Username</label>
			                 <input type="text" class="form-control" name="username" placeholder="Masukkan Username" required></input>
			                </div>

			                <div class="form-group">
			                 <label>Password</label>
			                 <input type="password" class="form-control" name="password" placeholder="Masukkan Password" required></input>
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
