<?php
//include file koneksi.php
include 'koneksi.php' ;

//jika benar mendapatkan GET id_temp_kandang dari URL
if(isset($_GET['id_temp_kandang'])){
	//membuat variabel $id_temp_kandang yang menyimpan nilai dari $_GET['id_temp_kandang']
	$id_temp_kandang = $_GET['id_temp_kandang'];
	
	//query ke database DELETE untuk menghapus data dengan kondisi id_temp_kandang=$id_temp_kandang
	$del = mysqli_query($koneksi, "DELETE FROM temperature_kandang WHERE id_temp_kandang='$id_temp_kandang'") or die(mysqli_error($koneksi));
	if($del){
		echo '<script>alert("Berhasil menghapus data."); document.location="suhu_kandang.php";</script>';
	}else{
		echo '<script>alert("Gagal menghapus data."); document.location="suhu_kandang.php";</script>';
	}
}else{
	echo '<script>alert("id_temp_kandang tidak ditemukan di database."); document.location="suhu_kandang.php";</script>';
}

?>