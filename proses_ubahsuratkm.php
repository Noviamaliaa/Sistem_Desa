<?php
// Load file koneksi.php
include "koneksi.php";
// Ambil data id yang dikirim oleh form_ubah.php melalui URL
$no_suratkm = $_GET['no_suratkm'];
// Ambil Data yang Dikirim dari Form
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
    // Proses ubah data ke Database
    $query = "UPDATE tb_suratkm SET nama='".$nama."', binti_bin='".$binti_bin."', ttl='".$ttl."', warga_negara='".$warga_negara."', jenis_kelamin='".$jenis_kelamin."', agama='".$agama."', alamat='".$alamat."',  pekerjaan='".$pekerjaan."', penyebab_kematian='".$penyebab_kematian."', tanggal_kematian='".$tanggal_kematian."' WHERE no_suratkm='".$no_suratkm."'";
    $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
    if($sql){ // Cek jika proses simpan ke database sukses atau tidak
      // Jika Sukses, Lakukan :
      header("location: srt_kematian.php"); // Redirect ke halaman index.php
    }else{
      // Jika Gagal, Lakukan :
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='update_datasuratkm.php'>Kembali Ke Form</a>";
    }
  // Proses ubah data ke Database
  $query = "UPDATE tb_suratkm SET nama='".$nama."', binti_bin='".$binti_bin."', ttl='".$ttl."', warga_negara='".$warga_negara."',  jenis_kelamin='".$jenis_kelamin."', agama='".$agama."', alamat='".$alamat."', pekerjaan='".$pekerjaan."', penyebab_kematian='".$penyebab_kematian."', tanggal_kematian='".$tanggal_kematian."' WHERE no_suratkm='".$no_suratkm."'";
  $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: srt_kematian.php"); // Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='update_datasuratkm.php'>Kembali Ke Form</a>";
  }
?>