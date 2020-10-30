<?php
// Load file koneksi.php
include "koneksi.php";
// Ambil Data yang Dikirim dari Form
$no_suratdomisili = $_POST['no_suratdomisili'];
$nama = $_POST['nama'];
$ttl = $_POST['ttl'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$pekerjaan = $_POST['pekerjaan'];
$no_ktp = $_POST['no_ktp'];
$pendidikan = $_POST['pendidikan'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];
$perihal_surat = $_POST['perihal_surat'];
  // Proses simpan ke Database
  $query = "INSERT INTO tb_domisili VALUES('".$no_suratdomisili."', '".$nama."', '".$ttl."', '".$jenis_kelamin."', '".$pekerjaan."', '".$no_ktp."', '".$pendidikan."', '".$agama."', '".$alamat."', '".$perihal_surat."')";
  $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: srt_domisili.php"); // Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='srt_domisili.php'>Kembali Ke Form</a>";
  }

?>