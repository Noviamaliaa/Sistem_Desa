<?php
// Load file koneksi.php
include "koneksi.php";
// Ambil Data yang Dikirim dari Form
$no_suratskkb = $_POST['no_suratskkb'];
$nama = $_POST['nama'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['jenis_kelamin'];
$ttl = $_POST['ttl'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$no_nik = $_POST['no_nik'];
$pendidikan = $_POST['pendidikan'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];
$perihal_surat = $_POST['perihal_surat'];
  // Proses simpan ke Database
  $query = "INSERT INTO tb_skkb VALUES('".$no_suratskkb."', '".$nama."', '".$tempat_lahir."', '".$ttl."', '".$jenis_kelamin."', '".$no_nik."', '".$pendidikan."', '".$agama."', '".$alamat."', '".$perihal_surat."')";
  $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: srt_skck.php"); // Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='srt_skck.php'>Kembali Ke Form</a>";
  }

?>