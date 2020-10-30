<?php
// Load file koneksi.php
include "koneksi.php";
// Ambil data id yang dikirim oleh index.php melalui URL
$no_suratsktm = $_GET['no_suratsktm'];
// Query untuk menampilkan data siswa berdasarkan id yang dikirim
$query = "SELECT * FROM tb_sktm WHERE no_suratsktm='".$no_suratsktm."'";
$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql


// Query untuk menghapus data siswa berdasarkan id yang dikirim
$query2 = "DELETE FROM tb_sktm WHERE no_suratsktm='".$no_suratsktm."'";
$sql2 = mysqli_query($connect, $query2); // Eksekusi/Jalankan query dari variabel $query
if($sql2){ // Cek jika proses simpan ke database sukses atau tidak
  // Jika Sukses, Lakukan :
  header("location: srt_tkmampu.php"); // Redirect ke halaman index.php
}else{
  // Jika Gagal, Lakukan :
  echo "Data gagal dihapus. <a href='srt_tkmampu.php'>Kembali</a>";
}
?>