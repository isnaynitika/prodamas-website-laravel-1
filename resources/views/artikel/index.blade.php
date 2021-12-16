@extends('layouts.desain')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Prodamas Plus</title>

  <!--Goofle Font-->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@600&family=Montserrat&display=swap" rel="stylesheet" />

  <!--font awesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

  <!--CSS-->
  <link rel="stylesheet" href="css/artikel.css">

</head>

<body>
<!-- Content -->
<div class="row">
        <div class="leftcolumn">
            <div class="card">
                <h2>JUDUL ARTIKEL GHD FJHDFKDJ JKSDHD SJHSGIUS USGIKUSH SHGUSOISH KJSGHISUH JKSGODUI SUGIUDHID </h2><br>
                <div class="row">
                    <div class="col-sm-12">buat share
                    </div>
                    <div class="col-sm-8">
                        <h6>Nama Penulis </h6>
                    </div>
                    <div class="col-sm-4">
                        <h6>Senin, 12 November 2021</h6>
                    </div> 
                </div>
                <br>
                <div class="">
                    <img src="https://www.w3schools.com/howto/img_snow.jpg" alt="" style="height:100%;">   
                </div>
                <p>Some text..</p>
                <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                <p>It is a long established fact that /aa reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima unde esse illo dolorem quasi cupiditate tempora, aspernatur ab consequatur iste illum molestiae cum excepturi doloremque beatae sunt similique optio velit? Voluptate necessitatibus eveniet dignissimos id voluptatibus et deserunt excepturi quidem, ipsum cumque provident quo cupiditate maxime libero aut sit atque sequi nesciunt dolor veniam officia accusamus soluta repellat. Harum commodi repellat veniam fuga cupiditate ipsum sapiente maxime minima architecto iste quos sequi enim sunt adipisci neque temporibus voluptatibus amet aspernatur dignissimos animi, quia velit laborum. Labore, enim. Magni fugit nulla repellendus a suscipit, velit, cum possimus unde exercitationem adipisci voluptatum!</p>
            </div>
        </div>

        <div class="rightcolumn">
            <div class="card-right bg-light">
                <h5 class="card-header">Update Post</h5>
                <div class="col-sm-12">
                    <div class="caption">
                        <h5>Web Programming</h5>
                        <div class="row">
                            <div class="col-xl-3">
                                <img src="gambar/Programming.png" width="100%" alt="Cinque Terre">
                            </div>
                            <div class="col-sm-9">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisgna aliqua.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="caption">
                        <h5>Belajar HTML & CSS</h5>
                        <div class="row">
                            <div class="col-xl-3">
                                <img src="gambar/HTML_&_CSS.png" width="100%" alt="Cinque Terre">
                            </div>
                            <div class="col-sm-9">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisgna aliqua.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="caption">
                        <h5>Desain UI & UX</h5>
                        <div class="row">
                            <div class="col-xl-3">
                                <img src="gambar/Desain_UI_&_UX.png" width="100%" alt="Cinque Terre">
                            </div>
                            <div class="col-sm-9">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisgna aliqua.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="caption">
                        <h5>Belajar Python</h5>
                        <div class="row">
                            <div class="col-xl-3">
                                <img src="gambar/Python.png" width="100%"alt="Cinque Terre">
                            </div>
                            <div class="col-sm-9">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisgna aliqua.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="card-right bg-light">
                <h5 class="card-header">Kunjungi Website</h5>
                    <ul class="list-group list-group-flush">
                        <a class="list-group-item">An item</a>
                        <a class="list-group-item">A second item</a>
                        <a class="list-group-item">A third item</a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<!-- Akhir content -->
</body>
</html>
@endsection