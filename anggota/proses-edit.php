<?php
include '../koneksi.php';

if (isset($_POST['simpan']))
{
	$id_anggota 			= $_POST['id_anggota'];
	$nama					    = $_POST['nama'];
	$kelas	 			  	= $_POST['kelas'];
	$telp 					  = $_POST['telp'];
	$username				  = $_POST['username'];
	$password			   	= $_POST['password'];

	$sql =	"UPDATE anggota SET nama='$nama', kelas='$kelas', telp='$telp', username='$username', password='$password' WHERE id_anggota='$id_anggota'";

	$res = mysqli_query($koneksi, $sql);
	$count = mysqli_affected_rows($koneksi);

	if ($count == 1)
	{
		echo "
			<script>
				alert('Data Berhasil Ditambahkan');
				document.location.href='index.php';
			</script>
		";
	}
	else
	{
		header("Location: tambah.php");
	}
}
else
{
	header("Location: tambah.php");
}
?>
