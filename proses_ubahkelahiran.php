<?php
// Load file koneksi.php
include "koneksi.php";
// Ambil data id yang dikirim oleh form_ubah.php melalui URL
$no_suratkel = $_GET['no_suratkel'];
// Ambil Data yang Dikirim dari Form
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
    // Proses ubah data ke Database
    $query = "UPDATE tb_kelahiran SET nama='".$nama."', anak_ke='".$anak_ke."', jenis_kelamin='".$jenis_kelamin."', tempat_lahir='".$tempat_lahir."', tanggal_lahir='".$tanggal_lahir."',  nama_ibu='".$nama_ibu."', agama_ibu='".$agama_ibu."', pekerjaan_ibu='".$pekerjaan_ibu."', nama_ayah='".$nama_ayah."', agama_ayah='".$agama_ayah."', pekerjaan_ayah='".$pekerjaan_ayah."', alamat='".$alamat."' WHERE no_suratkel='".$no_suratkel."'";
    $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
    if($sql){ // Cek jika proses simpan ke database sukses atau tidak
      // Jika Sukses, Lakukan :
      header("location: srt_ktlahiran.php"); // Redirect ke halaman index.php
    }else{
      // Jika Gagal, Lakukan :
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='update_datakelahiran.php'>Kembali Ke Form</a>";
    }
  // Proses ubah data ke Database
$query = "UPDATE tb_kelahiran SET nama='".$nama."', anak_ke='".$anak_ke."', jenis_kelamin='".$jenis_kelamin."', tempat_lahir='".$tempat_lahir."', tanggal_lahir='".$tanggal_lahir."',  nama_ibu='".$nama_ibu."', agama_ibu='".$agama_ibu."', pekerjaan_ibu='".$pekerjaan_ibu."', nama_ayah='".$nama_ayah."', agama_ayah='".$agama_ayah."', pekerjaan_ayah='".$pekerjaan_ayah."', alamat='".$alamat."' WHERE no_suratkel='".$no_suratkel."'";
  $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: srt_ktlahiran.php"); // Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='update_datakelahiran.php'>Kembali Ke Form</a>";
  }
?>