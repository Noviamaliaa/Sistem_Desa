<?php
// Load file koneksi.php
include "koneksi.php";
// Ambil data id yang dikirim oleh form_ubah.php melalui URL
$no_suratsktm = $_GET['no_suratsktm'];
// Ambil Data yang Dikirim dari Form
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
    // Proses ubah data ke Database
    $query = "UPDATE tb_sktm SET nama_ortu='".$nama_ortu."', ttl_ortu='".$ttl_ortu."', jk_ortu='".$jk_ortu."', pekerjaan_ortu='".$pekerjaan_ortu."', alamat='".$alamat."',  nama_anak='".$nama_anak."', ttl_anak='".$ttl_anak."', jk_anak='".$jk_anak."', pekerjaan_anak='".$pekerjaan_anak."', perihal_surat='".$perihal_surat."' WHERE no_suratsktm='".$no_suratsktm."'";
    $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
    if($sql){ // Cek jika proses simpan ke database sukses atau tidak
      // Jika Sukses, Lakukan :
      header("location: srt_tkmampu.php"); // Redirect ke halaman index.php
    }else{
      // Jika Gagal, Lakukan :
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='update_datasktm.php'>Kembali Ke Form</a>";
    }
  // Proses ubah data ke Database
 $query = "UPDATE tb_sktm SET nama_ortu='".$nama_ortu."', ttl_ortu='".$ttl_ortu."', jk_ortu='".$jk_ortu."', pekerjaan_ortu='".$pekerjaan_ortu."', alamat='".$alamat."',  nama_anak='".$nama_anak."', ttl_anak='".$ttl_anak."', jk_anak='".$jk_anak."', pekerjaan_anak='".$pekerjaan_anak."', perihal_surat='".$perihal_surat."' WHERE no_suratsktm='".$no_suratsktm."'";
  $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: srt_tkmampu.php"); // Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='update_datasktm.php'>Kembali Ke Form</a>";
  }
?>