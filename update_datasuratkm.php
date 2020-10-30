

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
                <div class="col-12">
                    <hr>
                   <h2 class="intro-text text-center">UPDATE SURAT
                        <strong>kETERANGAN KEMATIAN</strong>
                    </h2>
                    <hr>
                </div>
                
                <div class="col-lg-4 col-lg-offset-2">
                </div>
                <br><br>    <style>
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

 <?php
  // Load file koneksi.php
  include "koneksi.php";
  
  // Ambil data id yang dikirim oleh index.php melalui URL
  $no_suratkm = $_GET['no_suratkm'];
  
  // Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
  $query = "SELECT * FROM tb_suratkm WHERE no_suratkm='".$no_suratkm."'";
  $sql = mysqli_query($connect, $query);  // Eksekusi/Jalankan query dari variabel $query
  $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
  
  ?>
							  <form method="post" action="proses_ubahsuratkm.php?no_sura=<?php echo $no_suratkm; ?>" enctype="multipart/form-data">
                                <table cellpadding="8">
                                    <tr>
  </form>

                                    <div class="form-group">
                                            <label>No Surat Kematian</label>
                                            <input name="no_suratkm" type="text" class="form-control" placeholder="no_suratkm" value="<?php echo $data['no_suratkm']; ?>" />
                                        </div>
										
										<div class="form-group">
                                            <label>Nama</label>
                                            <input name="nama" type="text" class="form-control" placeholder="nama" value="<?php echo $data['nama']; ?>" />
                                        </div>
										
										
										<div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input name="ttl" type="date" class="form-control" placeholder="yyyy/mm/dd" value="<?php echo $data['ttl']; ?>" />
                                        </div>
										
										<div class="form-group">
                                          
                         
                                            <label>Jenis Kelamin </label>
                                            <label class="radio" value="<?php echo $data['jenis_kelamin']; ?>" >
                                                &emsp;&emsp;<input type="radio" name="jenis_kelamin" id="optionsRadiosInline1" value="Laki-Laki" value="<?php echo $data['jenis_kelamin']; ?>"checked>Laki-Laki
                                            </label>
                                            <label class="radio">
                                                &emsp;&emsp;<input type="radio" name="jenis_kelamin" id="optionsRadiosInline2" value="Perempuan" value="<?php echo $data['jenis_kelamin']; ?>">Perempuan
                                            </label>
                                        </div>
										
										<div class="form-group">
                                            <label>Alamat</label>
                                            <input name="alamat" type="text" class="form-control" placeholder="Alamat" value="<?php echo $data['alamat']; ?>"/>
                                        </div>
										
										<div class="form-group">
                                            <label>Agama</label>
											<select name = "agama" class="form-control" value="<?php echo $data['agama']; ?>">
												<option value = "-" value="<?php echo $data['agama']; ?>">Pilih Agama</option>
												<option value = "Islam" value="<?php echo $data['agama']; ?>">Islam</option>
												<option value = "Kristen" value="<?php echo $data['agama']; ?>">Kristen</option>
												<option value = "Budha" value="<?php echo $data['agama']; ?>">Budha</option>
											</select>
                                        </div>
										
										<div class="form-group">
                                            <label>Pekerjaan</label>
                                            <input name="pekerjaan" type="text" class="form-control" placeholder="Pekerjaan" value="<?php echo $data['pekerjaan']; ?>"/>
                                        </div>
										<div class="form-group">
                                            <label>Tanggal Kematian</label>
                                            <input name="tanggal_kematian" type="date" class="form-control" placeholder="yyyy/mm/dd" value="<?php echo $data['tanggal_kematian']; ?>"/>
                                        </div>
										<div class="form-group">
                                            <label>Waktu</label>
                                            <input name="waktu" type="text" class="form-control" placeholder="waktu"  value="<?php echo $data['waktu']; ?>"/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Tempat Pemakaman</label>
                                            <input name="tempat_pemakaman" type="text" class="form-control" placeholder="tempat_pemakaman" value="<?php echo $data['tempat_pemakaman']; ?>" />
                                        </div>									

                                        <hr>
										<input class="btn btn-primary" name="submit" type="submit" value="Edit" /> &nbsp;
                                        <a href="srt_kematian.php"><input class="btn btn-primary" input type="button" value="Batal"></a>
										</form>
							</div>
							
							
							</body>
                </div>
            </div>
        </div>
    </div>
</div></div>
    <!-- /.container -->
<p><br>
   <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright 2017 desatugumukti.com | Data Kependudukan · Membangun Desa | Pemberdayaan Desa | Desa Juara </p>
                </div>
            </div>
        </div>
    </footer>
    </p>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
