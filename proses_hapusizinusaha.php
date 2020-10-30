<?php
// Load file koneksi.php
include "koneksi.php";
// Ambil data id yang dikirim oleh index.php melalui URL
$no_suratush = $_GET['no_suratush'];
// Query untuk menampilkan data siswa berdasarkan id yang dikirim
$query = "SELECT * FROM tb_izinusaha WHERE no_suratush='".$no_suratush."'";
$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql


// Query untuk menghapus data siswa berdasarkan id yang dikirim
$query2 = "DELETE FROM tb_izinusaha WHERE no_suratush='".$no_suratush."'";
$sql2 = mysqli_query($connect, $query2); // Eksekusi/Jalankan query dari variabel $query
if($sql2){ // Cek jika proses simpan ke database sukses atau tidak
  // Jika Sukses, Lakukan :
  header("location: srt_izinusaha.php"); // Redirect ke halaman index.php
}else{
  // Jika Gagal, Lakukan :
  echo "Data gagal dihapus. <a href='srt_izinusaha.php'>Kembali</a>";
}
?>