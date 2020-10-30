<?php
// Load file koneksi.php
include "koneksi.php";
// Ambil data id yang dikirim oleh form_ubah.php melalui URL
$no_suratdomisili = $_GET['no_suratdomisili'];
// Ambil Data yang Dikirim dari Form
$nama = $_POST['nama'];
$ttl = $_POST['ttl'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$pekerjaan = $_POST['pekerjaan'];
$no_ktp = $_POST['no_ktp'];
$pendidikan = $_POST['pendidikan'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];
$perihal_surat = $_POST['perihal_surat'];
    // Proses ubah data ke Database
    $query = "UPDATE tb_domisili SET nama='".$nama."', ttl='".$ttl."', jenis_kelamin='".$jenis_kelamin."', pekerjaan='".$pekerjaan."', no_ktp='".$no_ktp."',  pendidikan='".$pendidikan."', agama='".$agama."', alamat='".$alamat."', perihal_surat='".$perihal_surat."' WHERE no_suratdomisili='".$no_suratdomisili."'";
    $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
    if($sql){ // Cek jika proses simpan ke database sukses atau tidak
      // Jika Sukses, Lakukan :
      header("location: srt_domisili.php"); // Redirect ke halaman index.php
    }else{
      // Jika Gagal, Lakukan :
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='update_datadomisili.php'>Kembali Ke Form</a>";
    }
  // Proses ubah data ke Database
$query = "UPDATE tb_domisili SET nama='".$nama."', ttl='".$ttl."', jenis_kelamin='".$jenis_kelamin."', pekerjaan='".$pekerjaan."', no_ktp='".$no_ktp."',  pendidikan='".$pendidikan."', agama='".$agama."', alamat='".$alamat."', perihal_surat='".$perihal_surat."' WHERE no_suratdomisili='".$no_suratdomisili."'";
  $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: srt_domisili.php"); // Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='update_datadomisili.php'>Kembali Ke Form</a>";
  }
?>