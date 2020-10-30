<?php
// Load file koneksi.php
include "koneksi.php";
// Ambil Data yang Dikirim dari Form
$no_suratush = $_POST['no_suratush'];
$nama = $_POST['nama'];
$ttl = $_POST['ttl'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$no_ktp = $_POST['no_ktp'];
$pekerjaan = $_POST['pekerjaan'];
$alamat = $_POST['alamat'];
$jenis_usaha = $_POST['jenis_usaha'];

  // Proses simpan ke Database
  $query = "INSERT INTO tb_izinusaha VALUES('".$no_suratush."', '".$nama."', '".$ttl."', '".$jenis_kelamin."', '".$no_ktp."', '".$pekerjaan."', '".$alamat."', '".$jenis_usaha."')";
  $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: srt_izinusaha.php"); // Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='srt_izinusaha.php'>Kembali Ke Form</a>";
  }

?>