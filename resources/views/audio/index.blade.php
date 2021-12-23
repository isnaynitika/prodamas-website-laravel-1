@extends('layouts.desain')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>

  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <title>Prodamas Plus</title>

    <!--icon-->
    <link href="img/logoprodamas.png" rel="icon" />

    <!--Goofle Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@600&family=Montserrat&display=swap" rel="stylesheet" />

    <!--font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <!-- Template Main CSS File
    <LINK rel="stylesheet" type="text/css"
     href="media.css" title="Default Styles" media="screen">-->

    <!--CSS-->
    <link rel="stylesheet" href="css/media.css">

</head>

<body>

    <!-- awal jumbotron -->
    <div class="container-fluid banner">
        <div class="container banner-content">
            <h1>Audio</h1>
        </div>
    </div>
    <!-- akhir jumbotrom -->


    <!-- Awal feed audio -->
    <div class="row row-cols-1 row-cols-md-3 mb-2 g-4 centerItms feedAudio">
        {{-- Card Audio --}}
        <div class=" card noBorder cardAudio" style="width: 18rem;">
            <div class="card h-100 noBorder">
                <a href="">
                    <img src="https://images.unsplash.com/photo-1504600770771-fb03a6961d33?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=582&q=80" class="card-img-top d-flex justify-content" alt="...">
                </a>
                <div class="card-body">
                    <h5 class="card-title">
                        <a class="btn btn-lg btn-light btnContentLink tittleAudio" href="">
                            Ini Judul
                        </a>
                    </h5>
                </div>
            </div>
        </div>

        <div class=" card noBorder cardAudio" style="width: 18rem;">
            <div class="card h-100 noBorder">
                <a href="">
                    <img src="https://images.unsplash.com/photo-1504600770771-fb03a6961d33?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=582&q=80" class="card-img-top d-flex justify-content" alt="...">
                </a>
                <div class="card-body">
                    <h5 class="card-title">
                        <a class="btn btn-lg btn-light btnContentLink tittleAudio" href="">
                            Ini Judul
                        </a>
                    </h5>
                </div>
            </div>
        </div>

        <div class=" card noBorder cardAudio" style="width: 18rem;">
            <div class="card h-100 noBorder">
                <a href="">
                    <img src="https://images.unsplash.com/photo-1504600770771-fb03a6961d33?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=582&q=80" class="card-img-top d-flex justify-content" alt="...">
                </a>
                <div class="card-body">
                    <h5 class="card-title">
                        <a class="btn btn-lg btn-light btnContentLink tittleAudio" href="">
                            Ini Judul
                        </a>
                    </h5>
                </div>
            </div>
        </div>

        <div class=" card noBorder cardAudio" style="width: 18rem;">
            <div class="card h-100 noBorder">
                <a href="">
                    <img src="https://images.unsplash.com/photo-1504600770771-fb03a6961d33?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=582&q=80" class="card-img-top d-flex justify-content" alt="...">
                </a>
                <div class="card-body">
                    <h5 class="card-title">
                        <a class="btn btn-lg btn-light btnContentLink tittleAudio" href="">
                            Ini Judul
                        </a>
                    </h5>
                </div>
            </div>
        </div>

        <div class=" card noBorder cardAudio" style="width: 18rem;">
            <div class="card h-100 noBorder">
                <a href="">
                    <img src="https://images.unsplash.com/photo-1504600770771-fb03a6961d33?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=582&q=80" class="card-img-top d-flex justify-content" alt="...">
                </a>
                <div class="card-body">
                    <h5 class="card-title">
                        <a class="btn btn-lg btn-light btnContentLink tittleAudio" href="">
                            Ini Judul
                        </a>
                    </h5>
                </div>
            </div>
        </div>

        <div class=" card noBorder cardAudio" style="width: 18rem;">
            <div class="card h-100 noBorder">
                <a href="">
                    <img src="https://images.unsplash.com/photo-1504600770771-fb03a6961d33?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=582&q=80" class="card-img-top d-flex justify-content" alt="...">
                </a>
                <div class="card-body">
                    <h5 class="card-title">
                        <a class="btn btn-lg btn-light btnContentLink tittleAudio" href="">
                            Ini Judul
                        </a>
                    </h5>
                </div>
            </div>
        </div>

    </div>
    <!-- akhir feed audio -->

  </body>
</html>
@endsection
