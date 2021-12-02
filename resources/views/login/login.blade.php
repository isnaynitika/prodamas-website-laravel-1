<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Goofle Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@600&family=Montserrat&display=swap" rel="stylesheet" />
    <!--font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    {{-- CSS --}}
    <link rel="stylesheet" href="beranda.css" />
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <title>Login-Prodamas</title>
</head>
<body>
     {{-- NavBar --}}
    <nav class="navbar navbar-expand-lg navbar-light transparan">
        <div class="container">
            <img src="img/logoprodamas.png" alt="" width="40" height="40" class="d-inline-block align-text-top" />
            <a class="navbar-brand" style="padding-left: 5px; font-family: Inter, sans-serif; color:black;" href="#">PRODAMAS</a>
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
    {{-- Login --}}
    <div class="pasLayar">
        <div class="loginLayer">
            <h2 align="center" style="color:white;"><b> LOGIN </b></h2>
            &nbsp;
            {{-- <h4 align="center"> Login User</h4> --}}
            <form action=" " method="POST">
                @csrf
                <input type="text" class="form-control col-form-label-lg jarakForm" placeholder="Username/Email" aria-label="user" id="user" name="user">
                <input type="password" class="form-control col-form-label-lg jarakForm" placeholder="Password" aria-label="password" id="password" name="password">
                <button type="submit" class="btn btn-success col-form-label-lg tombolLogin jarakForm">Submit</button>
            </form>
        </div>
    </div>
    {{-- footer --}}
    <footer class="text-white text-center text-lg-start warnaFoot fixed-bottom ">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2021 Copyright:
          <a class="text-white" href="">Prodamas Kota Kediri</a>
        </div>
        <!-- Copyright -->
    </footer>
</body>
</html>
