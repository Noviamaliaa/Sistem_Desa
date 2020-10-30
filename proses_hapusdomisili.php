<?php
// Load file koneksi.php
include "koneksi.php";
// Ambil data id yang dikirim oleh index.php melalui URL
$no_suratdomisili = $_GET['no_suratdomisili'];
// Query untuk menampilkan data siswa berdasarkan id yang dikirim
$query = "SELECT * FROM tb_domisili WHERE no_suratdomisili='".$no_suratdomisili."'";
$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql


// Query untuk menghapus data siswa berdasarkan id yang dikirim
$query2 = "DELETE FROM tb_domisili WHERE no_suratdomisili='".$no_suratdomisili."'";
$sql2 = mysqli_query($connect, $query2); // Eksekusi/Jalankan query dari variabel $query
if($sql2){ // Cek jika proses simpan ke database sukses atau tidak
  // Jika Sukses, Lakukan :
  header("location: srt_domisili.php"); // Redirect ke halaman index.php
}else{
  // Jika Gagal, Lakukan :
  echo "Data gagal dihapus. <a href='srt_domisili.php'>Kembali</a>";
}
?>