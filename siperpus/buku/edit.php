<?php
include '../koneksi.php';
include '../aset/header.php';
$id_buku = $_GET["id_buku"];
$query = mysqli_query($koneksi, "SELECT * FROM buku INNER JOIN kategori ON buku.id_kategori = kategori.id_kategori WHERE id_buku='$id_buku'");
$buku = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Buku</title>
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
					<form action="edit-proses.php" method="post">
						<input type="hidden" name="id_buku" value="<?= $buku['id_buku']; ?>">
              <div class="form-group">
               <label for="buku">Judul</label>
               <input type="text" class="form-control" name="judul" id="judul"  value="<?= $buku['judul']?>" required>
              </div>
              <div class="form-group">
               <label for="buku">Penerbit</label>
               <input type="text" class="form-control" name="penerbit" id="penerbit"   value="<?= $buku['penerbit']?>" required>
              </div>
              <div class="form-group">
               <label for="buku">Pengarang</label>
               <input type="text" class="form-control" name="pengarang" id="pengarang"  value="<?= $buku['pengarang']?>" required>
              </div>
              <div class="form-group">
               <label for="buku">Ringkasan</label>
               <textarea name="ringkasan" id="ringkasan" class="form-control" placeholder="<?= $buku['ringkasan']?>" required></textarea>
              </div>
              <div class="form-group">
              <label for="buku">Cover:  </label>
              <input type="file" name="cover" id="cover"  value="<?= $edit['cover']?>" required>
              </div>
              <div class="form-group">
              <label for="buku">Stok</label>
              <input type="number" class="form-control"name="stok"id="stok" value="<?= $buku['stok']?>" required>
              </div>
							<div class="form-group">
							<label for="buku">Kategori</label>
								<select name="id_kategori" class="form-control" id="id_kategori" required>
                  <option value="">-- Pilih Kategori --</option>

										<?php
											$query = mysqli_query($koneksi, "SELECT * FROM buku INNER JOIN kategori ON buku.id_kategori = kategori.id_kategori WHERE id_buku=$id_buku");
											while ($query_kategori = mysqli_fetch_assoc($query)){ ;
										?>
												<option value="<?php echo $query_kategori['id_kategori']; ?>">
													<?php echo $query_kategori['kategori'] ?>
												</option>
										<?php }; ?>
								</select>
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
