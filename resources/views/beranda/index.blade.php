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
  <link rel="stylesheet" href="css/beranda.css">

</head>

<body>

  <!-- awal jumbotron -->
  <div class="container-fluid banner">
    <div class="container banner-content">
      <h1>Bidang</h1>
    </div>
  </div>
  <!-- akhir jumbotrom -->

  <!--Tentang-->
  <section class="tentang">
    <div class="container">
      <div class="row">
        <div class="col mt-5 mb-5 text-center">
          <h2>Tentang Prodamas</h2>
        </div>
        <div class="col">
        </div>
      </div>
      <div class="row">
        <div class="col">
          <p style="text-align: justify;">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
        </div>
        <div class="col">
          <img src="{{url('../img/PRODAMASPLUS.png')}}" width="600px" height="300px ">
        </div>
      </div>
    </div>
  </section>
  <!--End tentang-->

  <!--artikel-->
  <div class="container artikel mb-5 mt-5">
    <h3 class="mb-4" style="font-family: Inter, sans-serif">Artikel</h3>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card h-100 hover-card">
          <img src="img/slide3.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Launching Kampung Keren</h5>
            <p class="card-text">Dana untuk pemberdayaan warga di level RT di Kota Kediri melalui program pemberdayaan masyarakat (Prodamas) plus bakal dikucurkan.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 hover-card">
          <img src="img/slide4.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Kampung Keren</h5>
            <p class="card-text"> Di mana alokasi anggaran Prodamas Plus mencapai Rp 100 juta per RT per tahun yang akan mencakup enam bidang kegiatan. Pemkot Kediri Kucurkan Rp 100 Juta Per RT.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 hover-card">
          <img src="img/slide5.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Prodamas</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
          </div>
        </div>
      </div>
    </div>
    <a href="{{ url('bincangprodamas') }}">
      <h6 class="text-end mt-3"><u>Info Lainnya <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
          </svg></u></h6>
    </a>
  </div>
  <!--end artikel-->

  <!--video-->
  <div class="container artikel mb-5 mt-5">
    <h3 class="mb-4" style="font-family: Inter, sans-serif">Video</h3>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card h-100 hover-card">
          <img src="img/slide3.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Launching Kampung Keren</h5>
            <p class="card-text">Dana untuk pemberdayaan warga di level RT di Kota Kediri melalui program pemberdayaan masyarakat (Prodamas) plus bakal dikucurkan.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 hover-card">
          <img src="img/slide4.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Kampung Keren</h5>
            <p class="card-text"> Di mana alokasi anggaran Prodamas Plus mencapai Rp 100 juta per RT per tahun yang akan mencakup enam bidang kegiatan. Pemkot Kediri Kucurkan Rp 100 Juta Per RT.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 hover-card">
          <img src="img/slide5.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Prodamas</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
          </div>
        </div>
      </div>
    </div>
    <a href="{{ url('bincangprodamas') }}">
      <h6 class="text-end mt-3"><u>Info Lainnya <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
          </svg></u></h6>
    </a>
  </div>
  <!--end video-->

  <!--foto-->
  <div class="container artikel mb-5 mt-5">
    <h3 class="mb-4" style="font-family: Inter, sans-serif">Foto</h3>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card h-100 hover-card">
          <img src="img/slide3.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Launching Kampung Keren</h5>
            <p class="card-text">Dana untuk pemberdayaan warga di level RT di Kota Kediri melalui program pemberdayaan masyarakat (Prodamas) plus bakal dikucurkan.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 hover-card">
          <img src="img/slide4.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Kampung Keren</h5>
            <p class="card-text"> Di mana alokasi anggaran Prodamas Plus mencapai Rp 100 juta per RT per tahun yang akan mencakup enam bidang kegiatan. Pemkot Kediri Kucurkan Rp 100 Juta Per RT.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 hover-card">
          <img src="img/slide5.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Prodamas</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
          </div>
        </div>
      </div>
    </div>
    <a href="{{ url('bincangprodamas') }}">
      <h6 class="text-end mt-3"><u>Info Lainnya <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
          </svg></u></h6>
    </a>
  </div>
  <!--end foto-->

  <!--audio-->
  <div class="container artikel mb-5 mt-5">
    <h3 class="mb-4" style="font-family: Inter, sans-serif">Audio</h3>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card h-100 hover-card">
          <img src="img/slide3.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Launching Kampung Keren</h5>
            <p class="card-text">Dana untuk pemberdayaan warga di level RT di Kota Kediri melalui program pemberdayaan masyarakat (Prodamas) plus bakal dikucurkan.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 hover-card">
          <img src="img/slide4.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Kampung Keren</h5>
            <p class="card-text"> Di mana alokasi anggaran Prodamas Plus mencapai Rp 100 juta per RT per tahun yang akan mencakup enam bidang kegiatan. Pemkot Kediri Kucurkan Rp 100 Juta Per RT.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 hover-card">
          <img src="img/slide5.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Prodamas</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
          </div>
        </div>
      </div>
    </div>
    <a href="{{ url('bincangprodamas') }}">
      <h6 class="text-end mt-3"><u>Info Lainnya <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
          </svg></u></h6>
    </a>
  </div>
  <!--end audio-->

  <!--berlangganan-->
  <div class="container py-5 mb-5">
    <div class="cardberlangganan">
      <div class="card-body">
        <h5 class="card-title text-center mb-4 mt-5" style="font-weight: bold;font-family:Inter, sans-serif;">Berlangganan</h5>
        <p class="card-text text-center" style="font-family: Montserrat, sans-serif;;">Dapatkan informasi menarik dan terupdate tentang Prodamas Kota Kediri dengan mendaftarkan email Anda.</p>
        <form action="{{url('beranda.index')}}" method="post">
          @if ($message = Session::get('success'))
          <span class="text-success">
            <center>
              <strong>{{ $message }}</strong>
            </center>
          </span>
          @endif
          @if ($message = Session::get('error'))
          <span class="text-muted">
            <center>
              <strong>{{ $message }}</strong>
            </center>
          </span>
          @endif
          @if($errors->any('email'))
          <span class="text-danger">
            <center>
              <strong>{{$errors->first('email')}}</strong>
            </center>
          </span>
          @endif
          @csrf
          <div class="col-8 offset-2 mb-3 mt-2">
            <input type="text" class="form-control" name="email" aria-describedby="emailberlangganan">
          </div>
          <div class="d-grid gap-2 col-6 mx-auto mb-5">
            <button class="rounded" type="submit" style="background-color: #FF6600; border:none;color:white;height: 35px">Mulai Berlangganan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!--end berlangganan-->


</body>

</html>
@endsection