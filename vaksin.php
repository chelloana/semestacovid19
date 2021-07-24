<?php 
	session_start();
	date_default_timezone_set("Asia/Bangkok");

	include 'koneksi.php';
	
	if(isset($_POST["submit"])){

		$tempat = $_POST['tempat'];
		$tanggal = $_POST['tanggal'];
		$kuota = $_POST['kuota'];
        $daftar = $_POST['daftar'];

		$vaksin = mysqli_query($conn,"insert into vaksin values('','$tempat','$tanggal','$kuota','$daftar');");
			if($vaksin){
				mysqli_query($conn,"update vaksin where id_pendaftaran");
														
															
					echo "<meta http-equiv='refresh' content='1; URL=vaksin.php'> Berhasil ditambahkan";
															
					} else {
					echo "Eksekusi Query gagal";
					}
		};
	
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>InfCovid-Vaksinasi</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:400" rel="stylesheet" />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="fontawesome/css/all.min.css" rel="stylesheet" />
    <link href="css/templatemo-real-dynamic.css" rel="stylesheet" />
<!--

TemplateMo 547 Real Dynamic

https://templatemo.com/tm-547-real-dynamic

-->
</head>

<body>
    <div class="tm-container">
        <div class="tm-site-header"></div> <!-- tm-site-header -->
        <div class="tm-site-header-overlay">
            <div class="tm-header-stripe ml-auto"></div>
            <div class="tm-header-stripe tm-header-stripe-short ml-auto"></div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 tm-site-header-left">
                    <h1 class="text-uppercase tm-site-name">InfCovid</h1>
                        <p class="text-white mb-0 tm-site-desc">Website informasi covid-19 dan vaksinasi</p>
                    </div>
                    <div class="col-lg-8 tm-site-header-right">
                        <!--Navbar-->
                        <nav class="navbar navbar-expand-lg">
                            <!-- Collapse button -->
                            <button class="navbar-toggler toggler-example" type="button" data-toggle="collapse"
                                data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                aria-label="Toggle navigation"><span class="dark-blue-text"><i class="fas fa-bars text-white"></i></span></button>
                            <!-- Collapsible content -->
                            <div class="collapse navbar-collapse tm-nav" id="navbarNav">
                                <!-- Links -->
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                        <a class="nav-link tm-nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link tm-nav-link" href="statistik.php">Statistik</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link tm-nav-link" href="rumahsakit.php">Rumah Sakit</a>
                                    </li>
                                    <li class="nav-item active">
                                        <a class="nav-link tm-nav-link" href="vaksin.php">Vaksinasi</a>
                                    </li>
                                </ul>
                                <!-- Links -->
                            </div>
                            <!-- Collapsible content -->
                        </nav>
                        <!--/.Navbar-->
                    </div> <!-- col -->
                </div> <!-- row -->
            </div> <!-- container fluid -->
        </div> <!-- tm-site-header-overlay -->
        <div class="tm-header-stripe w-100"></div>
    </div>
    <div class="tm-container">
        <div class="parallax-window" data-parallax="scroll" data-image-src="img/vak.jpg"></div>
    </div>

    <div class="tm-container bg-white">
        <div class="tm-header-stripe w-100"></div>
        <div class="container-fluid">
            <!--Intro-->
            <section class="row tm-mb-1">
                <div class="col-12 text-center mx-auto tm-about-box">
                    <h2 class="tm-text-primary tm-my-1 tm-mb-5 tm-intro-text">Vaksinasi</h2>
                    <div class="card">
                            <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-center">
									<button style="margin-bottom" data-toggle="modal" data-target="#myModal" class="btn btn-info"><span class="glyphicon glyphicon-plus"></span>Tambah</button>
                                    <br>
                                </div>                    
                                <table class="table table-bordered">
											<tr>
												<th>No</th>
												<th>Tempat</th>
												<th>Tanggal Pelaksanaan</th>
												<th>Kuota</th>
												<th>Link Pendaftaran</th>
                                                <th>Action</th>

												
												<!--<th>Opsi</th>-->
											</tr></thead><tbody>
											<?php 
                                            include 'koneksi.php';
                                            $no=1;
											$vaksin=mysqli_query($conn,"SELECT * from vaksin");
											
											while($p=mysqli_fetch_array($vaksin)){

												?>
												
												<tr>
													<td><?php echo $no++ ?></td>
													<td><?php echo $p['tempat'] ?></td>
													<td><?php echo $p['tanggal'] ?></td>
													<td><?php echo $p['kuota'] ?></td>
													<td><?php echo $p['daftar'] ?></td>
                                                    <td><form action="vaksin.php" method="post" enctype="multipart/form-data" >
														<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
														  Action
														</button>
														<div class="dropdown-menu">
														  <input type="button" class="dropdown-item" data-toggle="modal" data-target="#ubah<?php echo $id_login ?>" value="Edit" \>
														  <input type="submit" class="dropdown-item" name="hapus" value="Delete" \>
														</div>
													</form>
													</td>
												</tr>
                                                
                                                

												<?php 
											}
											?>
										</tbody>
										</table>
                                    
                    
                </div>

                
            </section>

            
            <footer class="row">
                <p class="mb-0 w-100 text-center col-12">
                    Faustina Chelloana Triatmojo
                    
                    - InfCovid 
                </p>
            </footer>
        </div> <!-- container-fluid -->
    </div> <!-- tm-container -->

    <div id="myModal" class="modal fade">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title">Tambah Vaksinasi</h4>
						</div>
						<div class="modal-body">
							<form action="vaksin.php" method="post" enctype="multipart/form-data" >
								<div class="form-group">
									<label>Tempat</label>
									<input name="tempat" type="text" class="form-control" placeholder="Username" required>
								</div>
								<div class="form-group">
									<label>Tanggal Pelaksanaan</label>
									<input name="tanggal" type="date" class="form-control" placeholder="Tanggal Pelaksanaan">
								</div>
								<div class="form-group">
									<label>Kuota</label>
									<input name="kuota" type="text" class="form-control" placeholder="Kuota">
								</div>
                                <div class="form-group">
									<label>Link Pendaftaran</label>
									<input name="daftar" type="text" class="form-control" placeholder="Link Pendaftaran">
								</div>
								 

							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
								<input type="submit" name="submit" class="btn btn-primary" value="Simpan">
							</div>
						</form>
					</div>
				</div>
			</div>
	

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/tooplate-script.js"></script>    
</body>
</html>