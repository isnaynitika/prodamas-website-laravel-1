<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title','Prodamas Plus')</title>
  <!--icon-->
  <link href="img/logoprodamas.png" rel="icon" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
  <!--Goofle Font-->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@600&family=Montserrat&display=swap" rel="stylesheet" />
  <!--font awesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

  <!--style-->
  <style>
    .footer-link:hover {
      color: #fff;
    }
  </style>
</head>
<body>
  <!--navber-->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #4d148c">
        <div class="container">
        <img src="{{ asset('img/mainasset/logoprodamas.png') }}" alt="" width="40" height="40" class="d-inline-block align-text-top" />
        <a class="navbar-brand" style="padding-left: 5px; font-family: Inter, sans-serif" href="#">PRODAMAS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto" style="padding-right: 20px; font-weight: lighter; font-size: 13px; font-family: Inter, sans-serif">
            <li class="nav-item">
                <a class="nav-link active" href="#"><u>Beranda</u></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../Bidang/bidang.php">Bidang</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../bincang prodamas/bicangprodamas.php">Bincang Prodamas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Informasi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../media _ kritik/media.php">Media</a>
            </li>
            </ul>
            <form class="d-flex">
            <input class="form-control me-2" type="search" style="font-family: 'Font Awesome 5 Free'; font-weight: 600; border-radius: 30px; height: 30px" placeholder=" &#xf002;" aria-label="Search" />
            </form>
        </div>
        </div>
    </nav>
  <!--end navbar-->
      {{--  awal konten  --}}
    <main>
        @yield('content')
    </main>
  <!-- Awal footer -->
    <footer>
        <div class="footer-top">
        <div class="container">
            <div class="row">
            <div class="col-md-1 col-lg-2 footer-logo" style="margin-top: 45px">
                <img class="logo-footer" src="{{ asset('img/mainasset/logoprodamas.png') }}" width="110" height="110" alt="logo-footer" />
                <div style="margin-top: 12px">
                <img src="{{ asset('img/mainasset/Asset5.png') }}" alt="logo-prodamas-text" width="110" height="27" class="d-inline-block" />
                </div>
            </div>
            <div class="col-md-5 col-lg-5 offset-lg-2 footer-contact" style="margin-top: 45px; margin-left: 0px; color: white">
                <h5 style="font-family: Inter, sans-serif">Pemerintah Kota Kediri</h5>
                <p style="font-size: small">
                Jalan Basuki Rahmat No.15, Kelurahan Pocananan, <br />
                Kota kediri, Jawa Timur 64146
                </p>
                <p style="font-family: 'Font Awesome 5 Free'; font-weight: 600">&#xf0e0; prodamas.pemkotkediri@gmail.com</p>
                <p style="font-family: 'Font Awesome 5 Free'; font-weight: 600">&#xf095; (0354) 682955</p>
            </div>
            <div class="col-md-6 col-lg-5 footer-links" style="margin-top: 70px; color: white">
                <div class="row">
                <div class="col-md-6">
                    <a class="footer-link" href="../Beranda/index.php">Beranda</a> <br />
                    <a class="footer-link" href="../Bidang/bidang.php">Bidang</a> <br />
                    <a class="footer-link" href="../bincang prodamas/bicangprodamas.php">Bincang Prodamas</a> <br />
                    <a class="footer-link" href="#Informasi">Informasi</a>
                </div>
                <div class="col-md-6">
                    <a class="footer-link" href="../media _ kritik/media.php">Media</a> <br />
                    <a class="footer-link" href="#section-4">Visi dan Misi</a> <br />
                    <a class="footer-link" href="#section-4">Dashboard</a>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="footer-bottom">
        <div class="container">
            <div class="row">
            <div class="col-md-6 footer-copyright" style="color: white">&copy; 2021 Prodamas Plus</div>
            <div class="col-md-6 footer-social">
                <a href="https://www.youtube.com/channel/UCX6KxXBUbivqWXTku0nnPbA"><i class="fab fa-youtube"></i></a>
                <a href="https://www.instagram.com/prodamasplus/"><i class="fab fa-instagram"></i></a>
                <a href="https://vt.tiktok.com/ZSejpETUx/"><i class="fab fa-tiktok"></i></a>
            </div>
            </div>
        </div>
        </div>
    </footer>
    <!-- Akhir footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
