<?php
// Load file koneksi.php
include "koneksi.php";
// Ambil data id yang dikirim oleh form_ubah.php melalui URL
$no_suratush = $_GET['no_suratush'];
// Ambil Data yang Dikirim dari Form
$nama = $_POST['nama'];
$ttl = $_POST['ttl'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$no_ktp = $_POST['no_ktp'];
$pekerjaan = $_POST['pekerjaan'];
$alamat = $_POST['alamat'];
$jenis_usaha = $_POST['jenis_usaha'];
    // Proses ubah data ke Database
    $query = "UPDATE tb_izinusaha SET nama='".$nama."', ttl='".$ttl."', jenis_kelamin='".$jenis_kelamin."', no_ktp='".$no_ktp."', pekerjaan='".$pekerjaan."', alamat='".$alamat."', jenis_usaha='".$jenis_usaha."' WHERE no_suratush='".$no_suratush."'";
    $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
    if($sql){ // Cek jika proses simpan ke database sukses atau tidak
      // Jika Sukses, Lakukan :
      header("location: srt_izinusaha.php"); // Redirect ke halaman index.php
    }else{
      // Jika Gagal, Lakukan :
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='update_dataizinusaha.php'>Kembali Ke Form</a>";
    }
  // Proses ubah data ke Database
 $query = "UPDATE tb_izinusaha SET nama='".$nama."', ttl='".$ttl."', jenis_kelamin='".$jenis_kelamin."', no_ktp='".$no_ktp."', pekerjaan='".$pekerjaan."', alamat='".$alamat."', jenis_usaha='".$jenis_usaha."' WHERE no_suratush='".$no_suratush."'";
  $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: srt_izinusaha.php"); // Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='update_dataizinusaha.php'>Kembali Ke Form</a>";
  }
?>