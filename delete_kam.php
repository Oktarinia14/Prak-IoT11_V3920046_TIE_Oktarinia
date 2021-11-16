<?php
//include file koneksi.php
include 'koneksi.php' ;

//jika benar mendapatkan GET id_ph_air dari URL
if(isset($_GET['id_ph_air'])){
	//membuat variabel $id_ph_air yang menyimpan nilai dari $_GET['id_ph_air']
	$id_ph_air = $_GET['id_ph_air'];
	
	//query ke database DELETE untuk menghapus data dengan kondisi id_ph_air=$id_ph_air
	$del = mysqli_query($koneksi, "DELETE FROM ph_air WHERE id_ph_air='$id_ph_air'") or die(mysqli_error($koneksi));
	if($del){
		echo '<script>alert("Berhasil menghapus data."); document.location="kadar_air_minum.php";</script>';
	}else{
		echo '<script>alert("Gagal menghapus data."); document.location="kadar_air_minum.php";</script>';
	}
}else{
	echo '<script>alert("id_ph_air tidak ditemukan di database."); document.location="kadar_air_minum.php";</script>';
}

?>