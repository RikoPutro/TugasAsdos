<?php session_start();
include "koneksi.php";
$numoffrow=$_POST['id'];
$namabaru=$_POST['nama'];
$alamatbaru=$_POST['alamat'];
$usiabaru=$_POST['usia'];
$query = "UPDATE data_keluarga SET nama = '$namabaru', alamat = '$alamatbaru' , usia = '$usiabaru' WHERE id = '$numoffrow'" ;
 $hasil = mysql_query($query);
 //see the result
 if ($hasil) {
	echo "<script>
		alert('Selamat anda berhasil update data');
		window.location.assign('home.php');
	</script>";
}
?>
