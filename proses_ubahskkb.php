<?php
// Load file koneksi.php
include "koneksi.php";
// Ambil data id yang dikirim oleh form_ubah.php melalui URL
$no_suratskkb = $_GET['no_suratskkb'];
// Ambil Data yang Dikirim dari Form
$nama = $_POST['nama'];
$tempat_lahir = $_POST['tempat_lahir'];
$ttl = $_POST['ttl'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$no_nik = $_POST['no_nik'];
$pendidikan = $_POST['pendidikan'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];
$perihal_surat = $_POST['perihal_surat'];
    // Proses ubah data ke Database
    $query = "UPDATE tb_skkb SET nama='".$nama."', tempat_lahir='".$tempat_lahir."', ttl='".$ttl."', jenis_kelamin='".$jenis_kelamin."', no_nik='".$no_nik."',  pendidikan='".$pendidikan."', agama='".$agama."', alamat='".$alamat."', perihal_surat='".$perihal_surat."' WHERE no_suratskkb='".$no_suratskkb."'";
    $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
    if($sql){ // Cek jika proses simpan ke database sukses atau tidak
      // Jika Sukses, Lakukan :
      header("location: srt_skck.php"); // Redirect ke halaman index.php
    }else{
      // Jika Gagal, Lakukan :
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='update_dataskkb.php'>Kembali Ke Form</a>";
    }
  // Proses ubah data ke Database
$query = "UPDATE tb_skkb SET nama='".$nama."', tempat_lahir='".$tempat_lahir."', ttl='".$ttl."', jenis_kelamin='".$jenis_kelamin."', no_nik='".$no_nik."',  pendidikan='".$pendidikan."', agama='".$agama."', alamat='".$alamat."', perihal_surat='".$perihal_surat."' WHERE no_suratskkb='".$no_suratskkb."'";
  $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: srt_skck.php"); // Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='update_dataskkb.php'>Kembali Ke Form</a>";
  }
?>