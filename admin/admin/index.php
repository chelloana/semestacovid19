<?php
    include "../../koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>InfCovid</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:400" rel="stylesheet" /> <!-- https://fonts.google.com/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet" /> <!-- https://getbootstrap.com/ -->
    <link href="fontawesome/css/all.min.css" rel="stylesheet" /> <!-- https://fontawesome.com/ -->
    <link href="slick/slick.css" rel='stylesheet' /> <!-- https://kenwheeler.github.io/slick/ -->
    <link href="slick/slick-theme.css" rel='stylesheet' />
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
                                aria-label="Toggle navigation"><span class="dark-blue-text"><i
                                        class="fas fa-bars text-white"></i></span></button>
                            <!-- Collapsible content -->
                            <div class="collapse navbar-collapse tm-nav" id="navbarNav">
                                <!-- Links -->
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link tm-nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link tm-nav-link" href="statistik.php">Statistik</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link tm-nav-link" href="rumahsakit.php">Rumah Sakit</a>
                                    </li>
                                    <li class="nav-item">
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
        <div class="parallax-window" data-parallax="scroll" data-image-src="img/stet.jpg">
        </div>
    </div>

    <div class="tm-container bg-white">
        <div class="tm-header-stripe w-100"></div>
        <div class="container-fluid">
            <!--Intro-->

            <section class="row tm-mb-1">
                <h2 class="col-12 text-center tm-text-primary tm-my-1 tm-intro-text">COVID-19</h2>
                <p>Virus Corona atau severe acute respiratory syndrome coronavirus 2 (SARS-CoV-2) adalah virus yang 
                    menyerang sistem pernapasan. Penyakit karena infeksi virus ini disebut COVID-19. 
                    Virus Corona bisa menyebabkan gangguan ringan pada sistem pernapasan, infeksi paru-paru yang berat, 
                    hingga kematian.<br><b> Cara memcegah terpapar Covid-19 :</b> </p>
                <div class="col-lg-4 text-center">
                    <div class="tm-box-1">
                        <br>
                        <h3 class="tm-h3 tm-text-primary">MEMAKAI MASKER</h3>
                        <p>Menggunakan masker Double. Dengan lapisan dalam masker medis dan lapisan luar menggunakan masker kain. Hal ini cukup efektif untuk
                            menghindarkan kita dari terpaparnya virus.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="tm-box-1">
                        <br>
                        <h3 class="tm-h3 tm-text-primary">Mencuci Tangan</h3>
                        <p> Mencuci tangan dengan air yang mengalir atau bisa juga menggunakan hand sanitizer.</p>
                    </div>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="tm-box-1">
                        <br>
                        
                        <h3 class="tm-h3 tm-text-primary">Menjauhi Kerumunan</h3>
                        <p>Menahan diri untuk keluar rumah jika tidak ada keperluan yang penting. Jika mendesak jaga jarak kurang lebih 1m.
                            Dengan cara ini kita dapat menghindarkan kita dari terpaparnya
                            virus.
                        </p>
                    </div>
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

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/parallax.min.js"></script> <!-- https://pixelcog.github.io/parallax.js/ -->
    <script src="slick/slick.min.js"></script>
    <script src="js/tooplate-script.js"></script>
    <script>
        $(document).ready(function () {
            // Testimonials carousel
            $('.tm-carousel').slick({
                dots: true,
                infinite: false,
                speed: 300,
                slidesToShow: 1,
                slidesToScroll: 1
            });
        });
    </script>
</body>
</html>