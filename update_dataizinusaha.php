

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
                        <strong>kETERANGAN IZIN USAHA</strong>
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
  $no_suratush = $_GET['no_suratush'];
  
  // Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
  $query = "SELECT * FROM tb_izinusaha WHERE no_suratush='".$no_suratush."'";
  $sql = mysqli_query($connect, $query);  // Eksekusi/Jalankan query dari variabel $query
  $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
  
  ?>
							  <form method="post" action="proses_ubahizinusaha.php?no_suratush=<?php echo $no_suratush; ?>" enctype="multipart/form-data">
                                <table cellpadding="8">
                                    <tr>
  </form>

                                   <div class="form-group">
                                            <label>No Surat Izin Usaha</label>
                                            <input name="no_suratush" type="text" class="form-control" placeholder="no_suratush" value="<?php echo $data['no_suratush']; ?>" />
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input name="nama" type="text" class="form-control" placeholder="nama" value="<?php echo $data['nama']; ?>" />
                                        </div>
                                       <div class="form-group">
                                            <label>TTL</label>
                                            <input name="ttl" type="date" class="form-control" placeholder="yyyy/mm/dd" />
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
                                            <label>Nomor KTP</label>
                                            <input name="no_ktp" type="text" class="form-control" placeholder="no_ktp" value="<?php echo $data['no_ktp']; ?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Pekerjaan</label>
                                            <input name="pekerjaan" type="text" class="form-control" placeholder="pekerjaan" value="<?php echo $data['pekerjaan']; ?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input name="alamat" type="text" class="form-control" placeholder="alamat" value="<?php echo $data['alamat']; ?>" />
                                        </div>
                                    
                                        <div class="form-group">
                                            <label>Jenis Usaha</label>
                                            <input name="jenis_usaha" type="text" class="form-control" placeholder="jenis_usaha" value="<?php echo $data['jenis_usaha']; ?>" />
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
