@extends('layouts.desain')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
     <!-- Required meta tags -->
     <meta charset="utf-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1" />

     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

     <title>Video | Prodamas Plus</title>

     <!--Goofle Font-->
     <link rel="preconnect" href="https://fonts.googleapis.com" />
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
     <link href="https://fonts.googleapis.com/css2?family=Inter:wght@600&family=Montserrat&display=swap" rel="stylesheet" />

     <!--font awesome-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

     <!--CSS-->
     <link rel="stylesheet" href="css/media.css">
</head>
<body>

    <body>

        <!-- awal jumbotron -->
        <div class="container-fluid banner">
            <div class="container banner-content">
                <h1> Video </h1>
            </div>
        </div>
        <!-- akhir jumbotrom -->
    
    
        <!-- Awal feed video -->
        <div class="row row-cols-1 row-cols-md-3 mb-2 g-4 centerItms feedAudio">
            {{-- Card video --}}
            <div class=" card noBorder cardAudio" style="width: 18rem;">
                <div class="card h-100 noBorder" data-bs-toggle="modal" data-bs-target="#audioPlayer">
                    <img src="https://cdn-2.tstatic.net/surabaya/foto/bank/images/sosialisasi-prodamas-kediri-untuk-bantuan.jpg" 
                    style="width: 250px; height: 270px" class="card-img-top d-flex justify-content" alt="video-prodamas">
                    <div class="card-body">
                        <h5 class="card-title">
                            <p class=" tittleAudio" href="">
                                Sosialisasi Pelaksanaan Prodamas Plus 2021
                            </p>
                        </h5>
                    </div>
                </div>
            </div>
            {{-- Card Modal --}}
            <div class="modal fade" id="audioPlayer" tabindex="-1" aria-labelledby="audioPlayerLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                    <div class="modal-header ">
                      <h5 class="modal-title" id="videoPlayerLabel">JELANG PELAKSANAAN PRODAMAS PLUS 2021, PEMKOT KEDIRI LAKSANAKAN SOSIALISASI</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <div class="row videoPlayerBox">
                        <div class="col-6">
                            <video width="520" height="340" controls>
                                <source src="videoProd/video1.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                              </video> 
                        </div>
                        <div class="col-6">
                            <h3> JELANG PELAKSANAAN PRODAMAS PLUS 2021, PEMKOT KEDIRI LAKSANAKAN SOSIALISASI</h3>
                            <p>Wali kota Kediri menyelenggarakan sosialisasi prodamas plus kepada seluruh OPD.</p>
                        </div>
                    </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    </div>
                  </div>
                </div>
            </div>
            {{-- Akhir Card Video --}}


             {{-- Card video --}}
             <div class=" card noBorder cardAudio" style="width: 18rem;">
                <div class="card h-100 noBorder" data-bs-toggle="modal" data-bs-target="#audioPlayer">
                    <img src="https://images.unsplash.com/photo-1504600770771-fb03a6961d33?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=582&q=80" class="card-img-top d-flex justify-content" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">
                            <p class=" tittleAudio" href="">
                                Sosialisasi Pelaksanaan Prodamas Plus 2021
                            </p>
                        </h5>
                    </div>
                </div>
            </div>
            {{-- Card Modal --}}
            <div class="modal fade" id="audioPlayer" tabindex="-1" aria-labelledby="audioPlayerLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                    <div class="modal-header ">
                      <h5 class="modal-title" id="videoPlayerLabel">JELANG PELAKSANAAN PRODAMAS PLUS 2021, PEMKOT KEDIRI LAKSANAKAN SOSIALISASI</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <div class="row videoPlayerBox">
                        <div class="col-6">
                            <video width="520" height="340" controls>
                                <source src="videoProd/video1.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                              </video> 
                        </div>
                        <div class="col-6">
                            <h3> JELANG PELAKSANAAN PRODAMAS PLUS 2021, PEMKOT KEDIRI LAKSANAKAN SOSIALISASI</h3>
                            <p>Wali kota Kediri menyelenggarakan sosialisasi prodamas plus kepada seluruh OPD.</p>
                        </div>
                    </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    </div>
                  </div>
                </div>
            </div>
            {{-- Akhir Card Video --}}
             {{-- Card video --}}
             <div class=" card noBorder cardAudio" style="width: 18rem;">
                <div class="card h-100 noBorder" data-bs-toggle="modal" data-bs-target="#audioPlayer">
                    <img src="https://images.unsplash.com/photo-1504600770771-fb03a6961d33?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=582&q=80" class="card-img-top d-flex justify-content" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">
                            <p class=" tittleAudio" href="">
                                Sosialisasi Pelaksanaan Prodamas Plus 2021
                            </p>
                        </h5>
                    </div>
                </div>
            </div>
            {{-- Card Modal --}}
            <div class="modal fade" id="audioPlayer" tabindex="-1" aria-labelledby="audioPlayerLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                    <div class="modal-header ">
                      <h5 class="modal-title" id="videoPlayerLabel">JELANG PELAKSANAAN PRODAMAS PLUS 2021, PEMKOT KEDIRI LAKSANAKAN SOSIALISASI</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <div class="row videoPlayerBox">
                        <div class="col-6">
                            <video width="520" height="340" controls>
                                <source src="videoProd/video1.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                              </video> 
                        </div>
                        <div class="col-6">
                            <h3> JELANG PELAKSANAAN PRODAMAS PLUS 2021, PEMKOT KEDIRI LAKSANAKAN SOSIALISASI</h3>
                            <p>Wali kota Kediri menyelenggarakan sosialisasi prodamas plus kepada seluruh OPD.</p>
                        </div>
                    </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    </div>
                  </div>
                </div>
            </div>
            {{-- Akhir Card Video --}}
            
            
    
    
        </div>
        <!-- akhir feed video -->


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>
</html>

@endsection