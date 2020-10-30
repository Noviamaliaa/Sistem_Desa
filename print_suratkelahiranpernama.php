<?php
 
        echo '
        <style type="text/css">
            table {
                background: #fff;
                padding: 5px;
            }
            tr, td {
                border: 0px;
                border: 1px  solid #444;
            }
            tr,td {
                vertical-align: top!important;
            }
            #right {
                border-right: 0px;
            }
            #left {
                border-left: 0px;
            }
            .isi {
                height: 300px;
            }
            .disp {
                text-align: center;
                padding: 1.5rem 0;
                margin-bottom: .5rem;
            }
            .logodisp {
                float: left;
                position: relative;
                width: 110px;
                height: 110px;
                margin: 0 0 0 1rem;
            }
            #lead {
                width: auto;
                position: relative;
                margin: 25px 0 0 75%;
            }
            .lead {
                font-weight: bold;
                text-decoration: underline;
                margin-bottom: -10px;
            }
            .tgh {
                text-align: center;
            }
            #nama {
                font-size: 2.1rem;
                margin-bottom: -1rem;
            }
            #alamat {
                font-size: 16px;
            }
            .up {
                text-transform: uppercase;
                margin: 0;
                line-height: 2.2rem;
                font-size: 1.5rem;
            }
            .status {
                margin: 0;
                font-size: 1.3rem;
                margin-bottom: .5rem;
            }
            #lbr {
                font-size: 20px;
                font-weight: bold;
            }
            .separator {
                border-bottom: 0px solid #616161;
                margin: -1.3rem 0 1.5rem;
            }
            @media print{
                body {
                    font-size: 12px;
                    color: #212121;
                }
                table {
                    width: 100%;
                    font-size: 12px;
                    color: #212121;
                }
                tr, td {
                    border: table-cell;
                    border: 0px  solid #444;
                    padding: 8px!important;

                }
                tr,td {
                    vertical-align: top!important;
                }
                #lbr {
                    font-size: 20px;
                }
                .isi {
                    height: 200px!important;
                }
                .tgh {
                    text-align: center;
                }
                .disp {
                    text-align: center;
                    margin: -.5rem 0;
                }
                .logodisp {
                    float: left;
                    position: relative;
                    width: 100px;
                    height: 85px;
                    margin: .5rem 0 0 .5rem;
                }
                #lead {
                    width: auto;
                    position: relative;
                    margin: 15px 0 0 75%;
                }
                .lead {
                    font-weight: bold;
                    text-decoration: underline;
                    margin-bottom: -10px;
                }
                #nama {
                    font-size: 20px!important;
                    font-weight: bold;
                    text-transform: uppercase;
                    margin: -10px 0 -20px 0;
                }
                .up {
                    font-size: 17px!important;
                    font-weight: normal;
                }
                .status {
                    font-size: 17px!important;
                    font-weight: normal;
                    margin-bottom: -.1rem;
                }
                #alamat {
                    margin-top: -15px;
                    font-size: 13px;
                }
                #lbr {
                    font-size: 17px;
                    font-weight: bold;
                }
                .separator {
                    border-bottom: 2px solid #616161;
                    margin: -1rem 0 1rem;
                }

            }
        </style>

        <body onload="window.print()">

        <!-- Container START -->
        <div class="container">
            <div id="colres">
                <div class="disp">';
                   
                    if(!empty($logo)){
                        echo '<img class="logodisp" src="./upload/'.$logo.'"/>';
                    } else {
                        echo '<img class="logodisp" src="./img/kabupaten-bandung-barat.png"/>';
                    }
                    if(!empty($institusi)){
                        echo '<h6 class="up">'.$institusi.'</h6>';
                    } else {
                        echo '<h6 class="up">PEMERINTAH KABUPATEN BANDUNG BARAT</h6>';
                    }
                    if(!empty($nama)){
                        echo '<h5 class="up" id="nama">'.$nama.'</h5><br/>';
                    } else {
                        echo '<h5 class="up" id="nama">KECAMATAN CISARUA</h5><br/>';
                    }
                    if(!empty($status)){
                        echo '<h6 class="status">'.$status.'</h6>';
                    } else {
                        echo '<h5 class="status">KANTOR KEPALA DESA TUGUMUKTI</h6>';
                    }
                    if(!empty($alamat)){
                        echo '<span id="alamat">'.$alamat.'</span>';
                    } else {
                        echo '<span id="alamat">Jln. Tugu Cisarua Kabupaten Bandung Barat. Kode Pos 40551</span>';
                    }
                    echo '
                </div>
                <div class="separator"></div>';

                ?>
 <?php
  // Load file koneksi.php
  include "koneksi.php";
  
  // Ambil data id yang dikirim oleh index.php melalui URL
  $no_suratkel = $_GET['no_suratkel'];
  
  // Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
  $query = "SELECT * FROM tb_kelahiran WHERE no_suratkel='".$no_suratkel."'";
  $sql = mysqli_query($connect, $query);  // Eksekusi/Jalankan query dari variabel $query
  $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
  ?>


<center><br>    <span class="style2">SURAT KETERANGAN KELAHIRAN <br><br>Nomor :  <?php echo $data['no_suratkel']; ?></span>
<br>  </center><table width="1200" border="0" align="center" cellpadding="0" cellspacing="0" class="forms"><tbody>
 <td align="center" width="699"><div align="left">Kepala Desa Tugumukti Kecamatan Cisarua Kabupaten Bandung, Menerangka bahwa :   
</div></td></tbody></table>
 <table width="960" border="0" align="center" cellpadding="0" cellspacing="0" class="forms">      
    <tbody><tr><td>Nama       </td>          <td width="550"> : <?php echo  $data['nama'];?></td></tr>
        <tr><td>Anak ke-       </td><td bgcolor=""> : <?php echo $data['anak_ke'];?></td></tr>
        <tr><td>Jenis Kelamin<br>        </td>        <td bgcolor=""> : <?php echo $data['jenis_kelamin'];?></td></tr>
        <tr><td>Tempat Lahir <br>        </td>        <td bgcolor=""> : <?php echo $data['tempat_lahir'];?></td></tr>
        <tr><td>Tanggal Lahir <br></td>        <td>: <?php echo $data['tanggal_lahir'];?></td></tr>
        <tr></tbody></table>
    <table width="1200" border="0" align="center" cellpadding="0" cellspacing="0" class="forms"><tbody><tr><td><p>Adalah anak dari suami/istri :</tr></tbody></table>
 <table width="960" border="0" align="center" cellpadding="0" cellspacing="0" class="forms">      
    <tbody><tr><td>Nama Ibu        </td>          <td width="550"> : <?php echo  $data['nama_ibu'];?></td></tr>
    <tr><td>Agama Ibu<br>        </td><td bgcolor=""> : <?php echo $data['agama_ibu'];?></td></tr>
    <tr><td>Pekerjaan Ibu<br></td><td bgcolor=""> : <?php echo $data['pekerjaan_ibu'];?></td></tr>
    <tr><td>Alamat <br>        </td>        <td bgcolor=""> : <?php echo $data['alamat'];?></td></tr>
    <tr><td></td>  </tr>
    <tr><td>Nama Ayah <br></td>        <td>: <?php echo $data['nama_ayah'];?></td></tr>
    <tr><td>Agama Ayah <br></td>        <td>: <?php echo $data['agama_ayah'];?></td></tr>
    <tr><td>Pekerjaan Ayah <br></td>        <td>: <?php echo $data['pekerjaan_ayah'];?></td></tr>
    <tr><td>Alamat <br></td>        <td>: <?php echo $data['alamat'];?></td></tr><tr> 
    </tbody></table>
    <table width="1200" border="0" align="center" cellpadding="0" cellspacing="0" class="forms"><tbody><tr><td><p>Demikian Surat keterangan kelahiran ini kami buat dengan sebenarnya, untuk dipergunakan seperlunya.</tr></tbody></table>
</td></tr></tbody></table><p>
 
<div>
    <div style="width:200px;float:right">
       <center>Tugumukti, <?php $tgl=date('d-m-Y'); echo $tgl; ?>
        <br/><center>KEPALA DESA TUGUMUKTI
        <br><br>
      <br><br> <p><p> <p> H. ONDO SOLIHIN <br></p> </p></p></center>
    </div>
    <div style="clear:both"></div>
</div>