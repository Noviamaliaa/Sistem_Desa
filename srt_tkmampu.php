<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Desa Tugumukti</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

   <div class="brand">Desa Tugumukti</div>
    <div class="address-bar">Kecamatan Cisarua -  Kabupaten Bandung Barat -  Provinsi Jawa Barat</div>
    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">Business Casual</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                     <li>
                        <a href="about.php">Info Desa Tugumukti</a>
                    </li>
                    <li>
                        <a href="blog.php">  Surat Data Kepedudukan</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>  

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">SURAT
                        <strong>KETERANGAN TIDAK MAMPU</strong>
                    </h2>
                    <hr>
                </div>
				
				
				<br><br>	<style>
							div.img {
								margin: 40px;
								border: 5px solid #ccc;
								float: left;
								width: 300px;
								height:250px;
								background:silver;
							}

							
							</style>
							
							</head>
							<body>
							 <link rel="stylesheet" type="text/css" href="utk_table.css">
                                  <table class="data-table">
                                 
                                  <tr>
                                    <th>No Surat SKTM</th>
                                    <th> Nama Orang Tua </th>
                                    <th> TTL Orang Tua </th>
                                    <th> Pekerjaan Orang Tua </th>
                                    <th> Alamat </th>
                                    <th> Nama Anak </th>
                                    <th> TTL Anak </th>
                                    <th> Status </th>
                                    <th> Perihal Surat </th>
                                    <th>TTL</th>
                                    <th colspan="3"><center>Aksi</center></th>
                                    
                                  </tr>
                                  <?php
                                  // Load file koneksi.php
                                  include "koneksi.php";
                                  
                                  $query = "SELECT * FROM tb_sktm"; // Query untuk menampilkan semua data wisata alam
                                  $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
                                  
                                  while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                                    echo "<tr>";
                                    echo "<td>".$data['no_suratsktm']."</td>";
                                    echo "<td>".$data['nama_ortu']."</td>";
                                    echo "<td>".$data['ttl_ortu']."</td>";
                                    echo "<td>".$data['pekerjaan_ortu']."</td>";
                                    echo "<td>".$data['alamat']."</td>";
                                    echo "<td>".$data['nama_anak']."</td>";
                                    echo "<td>".$data['ttl_anak']."</td>";
                                    echo "<td>".$data['pekerjaan_anak']."</td>";
                                    echo "<td>".$data['perihal_surat']."</td>";
                                    echo "<td><a href='update_datasktm.php?no_suratsktm=".$data['no_suratsktm']."'>Edit</a></td>";
                                    echo "<td><a href='proses_hapussuratkm.php?no_suratsktm=".$data['no_suratsktm']."'>Delete</a></td>";
                                    echo "<td><a href='print_suratsktmpernama.php?no_suratsktm=".$data['no_suratsktm']."'>Print</a></td>";
                                    echo "</tr>";
                                  }
                                  ?>
                              </link>
                              </table>
                                  </table>

                            <br>
                            <a href="tambah_datasktm.php" class="btn btn-primary">tambah data</a>
                           
                            </div>
                            </br>
							</body>
                </div>
               
            </div>
        </div>

    </div>
    <!-- /.container -->

      <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright 2017 desatugumukti.com | Data Kependudukan · Membangun Desa | Pemberdayaan Desa | Desa Juara </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
