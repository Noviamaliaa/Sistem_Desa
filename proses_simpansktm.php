<?php
// Load file koneksi.php
include "koneksi.php";
// Ambil Data yang Dikirim dari Form
$no_suratsktm = $_POST['no_suratsktm'];
$nama_ortu = $_POST['nama_ortu'];
$ttl_ortu = $_POST['ttl_ortu'];
$jk_ortu = $_POST['jk_ortu'];
$pekerjaan_ortu = $_POST['pekerjaan_ortu'];
$alamat = $_POST['alamat'];
$nama_anak = $_POST['nama_anak'];
$ttl_anak = $_POST['ttl_anak'];
$jk_anak = $_POST['jk_anak'];
$pekerjaan_anak = $_POST['pekerjaan_anak'];
$perihal_surat = $_POST['perihal_surat'];
  // Proses simpan ke Database
  $query = "INSERT INTO tb_sktm VALUES('".$no_suratsktm."', '".$nama_ortu."', '".$ttl_ortu."', '".$jk_ortu."', '".$pekerjaan_ortu."', '".$alamat."', '".$nama_anak."', '".$ttl_anak."', '".$jk_anak."', '".$pekerjaan_anak."', '".$perihal_surat."')";
  $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: srt_tkmampu.php"); // Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='srt_tkmampu.php'>Kembali Ke Form</a>";
  }

?>