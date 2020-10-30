<?php
// Load file koneksi.php
include "koneksi.php";
// Ambil Data yang Dikirim dari Form
$no_suratkm = $_POST['no_suratkm'];
$nama = $_POST['nama'];
$binti_bin = $_POST['binti_bin'];
$ttl = $_POST['ttl'];
$warga_negara = $_POST['warga_negara'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];
$pekerjaan = $_POST['pekerjaan'];
$penyebab_kematian = $_POST['penyebab_kematian'];
$tanggal_kematian = $_POST['tanggal_kematian'];

  // Proses simpan ke Database
  $query = "INSERT INTO tb_suratkm VALUES('".$no_suratkm."', '".$nama."', '".$binti_bin."', '".$ttl."', '".$warga_negara."', '".$jenis_kelamin."', '".$agama."', '".$alamat."', '".$pekerjaan."', '".$penyebab_kematian_kematian."', '".$tanggal_kematian."')";
  $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: srt_kematian.php"); // Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='srt_kematian.php'>Kembali Ke Form</a>";
  }

?>