@extends('layouts.desain')
@section('artikel','active')
@section('search')
<form class="d-flex">
    <input class="form-control me-2" type="search" style="font-family: 'Font Awesome 5 Free'; font-weight: 600; border-radius: 30px; height: 30px" placeholder=" &#xf002;" aria-label="Search" />
</form>
@endsection
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <title>Prodamas Plus</title>

    <!--Goofle Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@600&family=Montserrat&display=swap" rel="stylesheet" />

    <!--font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <!--CSS-->
    <link rel="stylesheet" href="css/kampung.css">
</head>

<body>
    <!-- awal jumbotron -->
    <div class="container-fluid banner">
        <div class="container banner-content">
            <h1>Artikel</h1>
        </div>
    </div>
    <!-- akhir jumbotrom -->

    <div class="container">
        <div class="row justify-content-between mt-5">
            <!-- Kiri  -->
            <div class="col-4">
                <div class="card text-dark bg-light mb-3 kartuatas">
                    <div class="card-header">Artikel</div>
                    <div class="card-body">
                        <div class="row row-cols-1 row-cols-md-2 g-2">
                            <div class="col">
                                <div class="isi">
                                    <img src="img/sosial-budaya.jpg" class="card-img-top">
                                    <a href="#">This card has supporting text below as a natural lead-in to additional
                                        content.</a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="isi">
                                    <img src="img/sosial-budaya.jpg" class="card-img-top">
                                    <a href="#">This card has supporting text below as a natural lead-in to additional
                                        content.</a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="isi">
                                    <img src="img/sosial-budaya.jpg" class="card-img-top">
                                    <a href="#">This card has supporting text below as a natural lead-in to additional
                                        content.</a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="isi">
                                    <img src="img/sosial-budaya.jpg" class="card-img-top" alt="...">
                                    <a href="#">This card has supporting text below as a natural lead-in to additional
                                        content.</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Kanan  -->
            <div class="col">
                <div class="mb-3 kartu">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="img/sosial-budaya.jpg" class="img-fluid rounded-start">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <a href="/artikel/wali-kota" class="link-dark">
                                    <h5 class="card-title">Wali Kota Kediri Luncurkan 10 Kampung Keren Prodamas, Harapkan Ekonomi dan Kreativitas Akan Terus Tumbuh</h5>
                                </a>
                                <p class="card-text">Wali Kota Kediri Abdullah Abu Bakar meluncurkan 10 Kampung Kreatif dan Independen (Keren) Prodamas, Selasa (9/11) bertempat di IKCC.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-3 kartu">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="img/sosial-budaya.jpg" class="img-fluid rounded-start">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.
                                    This is a wider card with supporting text below as a natural lead-in to additional
                                    content. This content is a little bit longer.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-3 kartu">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="img/sosial-budaya.jpg" class="img-fluid rounded-start">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.
                                    This is a wider card with supporting text below as a natural lead-in to additional
                                    content. This content is a little bit longer.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-3 kartu">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="img/sosial-budaya.jpg" class="img-fluid rounded-start">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.
                                    This is a wider card with supporting text below as a natural lead-in to additional
                                    content. This content is a little bit longer.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="mb-3 kartu">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="img/sosial-budaya.jpg" class="img-fluid rounded-start">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.
                                    This is a wider card with supporting text below as a natural lead-in to additional
                                    content. This content is a little bit longer.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-3 kartu">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="img/sosial-budaya.jpg" class="img-fluid rounded-start">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.
                                    This is a wider card with supporting text below as a natural lead-in to additional
                                    content. This content is a little bit longer.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
@endsection
