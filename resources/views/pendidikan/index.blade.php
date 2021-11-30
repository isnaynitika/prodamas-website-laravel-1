@extends('layouts.sidebar')
    <style>
        .container{
            margin-top: 20px;
            text-align: justify;
        }

        .unduh{
            position: relative;
            width: 100%;
            max-width: 400px;
        }

        .unduh img {
            width: 100%;
            height: auto;
        }

        .unduh .btn {
            position: absolute;
            top: 16%;
            left: 85%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            background-color: #555;
            opacity: 0.8;
            color: white;
            font-size: 16px;
            padding: 5px 10px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            text-align: center;
        }

        .unduh .btn:hover {
            background-color: #FF6600;
            color: #FFFFFF;
        }
        
    </style>
    
@section('sektor')
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <title>Bootstrap Example</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
            <!--untuk icon button-->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <!--untuk icon button-->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        </head>
        <body>
            <div class="container">
                <h2 class="text-center">E-book Pemberlajaran</h2>

                <!--Baris 1-->
                <div style="max-width: 840px;">
                    <div class="row g-0">
                        <div class="col-ms-8">
                            <div class="card-body">
                                <div class="unduh">
                                    <img src="img/prodamas.jpg" style="height: 150px; border-radius: 3px;" class="img-fluid rounded-start" alt="...">
                                    <button class="btn"><a href="/PERWALI.pdf" style="color: #FFFFFF;"><i class="fa fa-download"></i></a></button>
                                </div>
                                <h5 class="card-title">Kelurahan Ngronggo</h5>
                            </div>
                        </div>
                        <div class="col-ms-8">
                            <div class="card-body">
                                <div class="unduh">
                                    <img src="img/prodamas.jpg" style="height: 150px; border-radius: 3px;" class="img-fluid rounded-start" alt="...">
                                    <button class="btn"><a href="/PERWALI.pdf" style="color: #FFFFFF;"><i class="fa fa-download"></i></a></button>
                                </div>
                                <h5 class="card-title">Kelurahan Ngronggo</h5>
                            </div>
                        </div>
                        <div class="col-ms-8">
                            <div class="card-body">
                                <div class="unduh">
                                    <img src="img/prodamas.jpg" style="height: 150px; border-radius: 3px;" class="img-fluid rounded-start" alt="...">
                                    <button class="btn"><a href="/PERWALI.pdf" style="color: #FFFFFF;"><i class="fa fa-download"></i></a></button>
                                </div>
                                <h5 class="card-title">Kelurahan Ngronggo</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Baris 1-->

                <!--Baris 2-->
                <div style="max-width: 840px;">
                    <div class="row g-0">
                        <div class="col-ms-8">
                            <div class="card-body">
                                <div class="unduh">
                                    <img src="img/prodamas.jpg" style="height: 150px; border-radius: 3px;" class="img-fluid rounded-start" alt="...">
                                    <button class="btn"><a href="/PERWALI.pdf" style="color: #FFFFFF;"><i class="fa fa-download"></i></a></button>
                                </div>
                                <h5 class="card-title">Kelurahan Ngronggo</h5>
                            </div>
                        </div>
                        <div class="col-ms-8">
                            <div class="card-body">
                                <div class="unduh">
                                    <img src="img/prodamas.jpg" style="height: 150px; border-radius: 3px;" class="img-fluid rounded-start" alt="...">
                                    <button class="btn"><a href="/PERWALI.pdf" style="color: #FFFFFF;"><i class="fa fa-download"></i></a></button>
                                </div>
                                <h5 class="card-title">Kelurahan Ngronggo</h5>
                            </div>
                        </div>
                        <div class="col-ms-8">
                            <div class="card-body">
                                <div class="unduh">
                                    <img src="img/prodamas.jpg" style="height: 150px; border-radius: 3px;" class="img-fluid rounded-start" alt="...">
                                    <button class="btn"><a href="/PERWALI.pdf" style="color: #FFFFFF;"><i class="fa fa-download"></i></a></button>
                                </div>
                                <h5 class="card-title">Kelurahan Ngronggo</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Baris 2-->

                <!--Baris 3-->
                <div style="max-width: 840px;">
                    <div class="row g-0">
                        <div class="col-ms-8">
                            <div class="card-body">
                                <div class="unduh">
                                    <img src="img/prodamas.jpg" style="height: 150px; border-radius: 3px;" class="img-fluid rounded-start" alt="...">
                                    <button class="btn"><a href="/PERWALI.pdf" style="color: #FFFFFF;"><i class="fa fa-download"></i></a></button>
                                </div>
                                <h5 class="card-title">Kelurahan Ngronggo</h5>
                            </div>
                        </div>
                        <div class="col-ms-8">
                            <div class="card-body">
                                <div class="unduh">
                                    <img src="img/prodamas.jpg" style="height: 150px; border-radius: 3px;" class="img-fluid rounded-start" alt="...">
                                    <button class="btn"><a href="/downloadbook"href="/PERWALI.pdf" style="color: #FFFFFF;"><i class="fa fa-download"></i></a></button>
                                </div>
                                <h5 class="card-title">Kelurahan Ngronggo</h5>
                            </div>
                        </div>
                        <div class="col-ms-8">
                            <div class="card-body">
                                <div class="unduh">
                                    <img src="img/prodamas.jpg" style="height: 150px; border-radius: 3px;" class="img-fluid rounded-start" alt="...">
                                    <button class="btn"><a href="/PERWALI.pdf" style="color: #FFFFFF;"><i class="fa fa-download"></i></a></button>
                                </div>
                                <h5 class="card-title">Kelurahan Ngronggo</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Baris 3-->
                
            </div>
            <!--div container-->
        </body>
    </html>
@endsection