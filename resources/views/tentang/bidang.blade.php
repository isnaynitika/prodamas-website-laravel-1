@extends('layouts.desain')
@section('content')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <title>Prodamas Plus</title>

        <!--icon-->
        <link href="img/icon.png" rel="icon" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

        <!--Goofle Font-->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@600&family=Montserrat&display=swap"
            rel="stylesheet" />

        <!--font awesome-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

        <!--CSS-->
        <link rel="stylesheet" href="css/bidang.css">
    </head>

    <body>
        <!-- Awal header -->
        <!--Apa itu prodamas-->
            <section id="prodamas">
                <div class="container">
                    <div class="row mt-5">
                        <div class="col text-center">
                            <h1>Cakupan Bidang</h1>
                        </div>
                    </div>
                <div class="row mt-5" style="font-family: Montserrat, sans-serif">
                    <div class="col" style="text-align: justify">
                        <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores neque ex labore quaerat corrupti hic accusantium cum animi laborum! Blanditiis minima voluptatum est reprehenderit deserunt consequatur, culpa hic suscipit
                        veniam omnis doloremque natus tenetur atque qui neque eius repellat minus, dolor sit amet consectetur adipisicing elit. Maiores neque ex labore quaerat corrupti hic accusantium cum animi laborum! Blanditiis minima voluptatum
                        est reprehenderit deserunt consequatur.
                        </p>
                    </div>
                </div>
                </div>
                <!--div container-->
            </section>
            <!-- Akhir Apa itu prodamas-->

            <!-- Bidang -->
            <section id="bidang">
                <div class="container mt-5">
                    <div class="row justify-content-center mt-5">
                    <!-- <div class="card mb-3" style="max-width: auto; background-color: skyblue;">
                    <div class="row g-0">
                        <div class="col-md-4">
                        <img src="img/ekonomi.jpg" class="img-fluid rounded-start" >
                        </div>
                        <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Ekonomi</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        </div>
                    </div>
                    </div> -->
                    <div class="col-sm-6-mt-5 mb-4">
                            <div class="box">
                                <div class="item">
                                    <h1>EKONOMI</h1>
                                </div>
                                <div class="item">
                                    <img src="img/ekonomi.jpg" alt="ekonomi">
                                </div>
                            </div>
                        </div>
                        <div class="col-md4 mb-4">
                            <div class="box">
                                <div class="item">
                                    <img src="img/sosial-budaya.jpg" alt="sosial-budaya">
                                </div>
                                <div class="item">
                                    <h1>SOSIAL BUDAYA</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-md4 mb-4">
                            <div class="box">
                                <div class="item">
                                    <h1>INFRASTRUKTUR</h1>
                                </div>
                                <div class="item">
                                    <img src="img/infrastruktur.jpg" alt="infrastruktur">
                                </div>
                            </div>
                        </div>
                        <div class="col-md4 mb-4">
                            <div class="box">
                                <div class="item">
                                    <img src="img/kesehatan.jpg" alt="kesehatan">
                                </div>
                                <div class="item">
                                    <h1>KESEHATAN</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-md4 mb-4">
                            <div class="box">
                                <div class="item">
                                    <h1>PENDIDIKAN</h1>
                                </div>
                                <div class="item">
                                    <img src="img/ekonomi.jpg" alt="pendidikan">
                                </div>
                            </div>
                        </div>
                        <div class="col-md4 mb-4">
                            <div class="box">
                                <div class="item">
                                    <img src="img/ekonomi.jpg" alt="kepemudaan">
                                </div>
                                <div class="item">
                                    <h1>KEPEMUDAAN</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Akhir Bidang -->
            <!-- Akhir header -->
        </body>
    </html>
@endsection