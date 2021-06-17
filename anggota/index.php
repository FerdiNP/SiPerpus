<?php
include '../koneksi.php';

$sql = "SELECT * FROM anggota ORDER BY nama";

$res = mysqli_query($koneksi, $sql);

$pinjam = array();

while ($data = mysqli_fetch_assoc($res)){
	$pinjam[] = $data;
}

include '../aset/header.php';
?>

<div class="container">
	<div class ="row mt-4">
		<div class="col-md">

		</div>
	</div>
</div>

<div class="container">
  <div class="row mt-4">
    <div class="col-md">

      <div class="card">
        <div class="card-header">
          <h2 class="card-title"><i class="fas fa-edit"></i>Data Anggota</h5>
        <h5 class="card-title"><a href="tambah.php"><button type="button" class="btn btn-outline-info"><i class="fas fa-plus"></i> Tambah Data</button></a>
        </div>
        <div class="car-body">
          <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Kelas</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
					    <?php
					    	$no =1;
					    	foreach ($pinjam as $p) { ?>

					    	<tr>
					    		<th scope="row"><?= $no ?></th>
					    		<td><?= $p['nama'] ?></td>
					    		<td><?= $p['kelas'] ?></td>
					    		<td>
					    			<a href="detail.php?id_anggota=<?= $p['id_anggota']; ?>" class="badge badge-success">Detail</a>
					    			<a href="edit.php?id_anggota=<?= $p['id_anggota']; ?>" class="badge badge-warning">Edit</a>
					    			<a href="hapus.php?id_anggota=<?= $p['id_anggota']; ?>" class="badge badge-danger">Hapus</a>
					    		</td>
					    	</tr>

					    <?php
					    	$no++;
					    }
					    ?>
					  </tbody>
					</table>
  				</div>
			</div>

<?php
include '../aset/footer.php';
?>
