<?php
include '../aset/header.php';
include '../koneksi.php';

$id_anggota = $_GET['id_anggota'];

$sql = "SELECT * FROM anggota where id_anggota = '$id_anggota'";
$res = mysqli_query($koneksi,$sql);
$detail = mysqli_fetch_assoc($res);

?>

<div class="countainer">
	<div class="row mt-4">
		<div class="col-md">
		</div>
		 </div>
			</div>
					<div class="card">
				  	<div class="card-header">
					 <h2><?= $detail['nama'] ?></h2>
				 </div>
					<div class="card-body">
	  					<table class="table">
					<tr>
						<td width="150px">Kelas</td>
						<td><?= $detail['kelas'] ?></td>
					</tr>
					<tr>
						<td>Telepon</td>
						<td><?= $detail['telp'] ?></td>
					</tr>
					<tr>
						<td></td>
						<td>
							<a href="edit.php?id_anggota=<?= $detail['id_anggota']; ?>" class="badge badge-warning">Edit</a>
    					<a href="hapus.php?id_anggota=<?= $detail['id_anggota']; ?>" class="badge badge-danger">Hapus</a>
						</td>
					</tr>
				</table>
		</div>
	</div>
</div>

<?php
include '../aset/footer.php';
?>
