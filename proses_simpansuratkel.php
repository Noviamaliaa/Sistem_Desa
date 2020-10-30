<?php
// Load file koneksi.php
include "koneksi.php";
// Ambil Data yang Dikirim dari Form
$no_suratkel = $_POST['no_suratkel'];
$nama = $_POST['nama'];
$anak_ke = $_POST['anak_ke'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$nama_ibu = $_POST['nama_ibu'];
$agama_ibu = $_POST['agama_ibu'];
$pekerjaan_ibu = $_POST['pekerjaan_ibu'];
$nama_ayah = $_POST['nama_ayah'];
$agama_ayah = $_POST['agama_ayah'];
$pekerjaan_ayah = $_POST['pekerjaan_ayah'];
$alamat = $_POST['alamat'];

  // Proses simpan ke Database
  $query = "INSERT INTO tb_kelahiran VALUES('".$no_suratkel."', '".$nama."', '".$anak_ke."', '".$jenis_kelamin."', '".$tempat_lahir."', '".$tanggal_lahir."', '".$nama_ibu."', '".$agama_ibu."', '".$pekerjaan_ibu."', '".$nama_ayah."', '".$agama_ayah."', '".$pekerjaan_ayah."', '".$alamat."')";
  $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: srt_ktlahiran.php"); // Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='srt_ktlahiran.php'>Kembali Ke Form</a>";
  }

?>