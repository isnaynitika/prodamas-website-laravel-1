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
                                <div class="link-dark">
                                    <h5 class="card-title">Wali Kota Kediri Luncurkan 10 Kampung Keren Prodamas, Harapkan Ekonomi dan Kreativitas Akan Terus Tumbuh</h5>
                                </div>
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
    {{-- Card Modal --}}
    {{-- <div class="modal fade" id="audioPlayer" tabindex="-1" aria-labelledby="audioPlayerLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header ">
                    <h5 class="modal-title" id="audioPlayerLabel">{{$audio->judul}}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="leftcolumn">
                            <div class="card">
                                <h2>Wali Kota Kediri Luncurkan 10 Kampung Keren Prodamas, Harapkan Ekonomi dan Kreativitas Akan Terus Tumbuh </h2><br>
                                <div class="row">
                                    <!--<div class="col-sm-12">buat share
                                    </div>-->
                                    <div class="col-sm-8">
                                        <h6>Bagian Protokol dan Komunikasi Pimpinan Sekretariat Daerah Kota Kediri</h6>
                                    </div>
                                    <div class="col-sm-4">
                                        <h6>Rabu, 5 Januari 2021</h6>
                                    </div>
                                </div>
                                <br>
                                <div class="">
                                    <img src="https://www.w3schools.com/howto/img_snow.jpg" alt="" style="height:100%;">
                                </div>
                                <p>Wali Kota Kediri Abdullah Abu Bakar meluncurkan 10 Kampung Kreatif dan Independen (Keren) Prodamas, Selasa (9/11) bertempat di IKCC. Peluncuran ditandai dengan pemukulan kentongan oleh Wali Kota Kediri yang didampingi Camat Kota, Camat Pesantren, dan Camat Mojoroto.</p>
                                <p>Kampung Keren Prodamas merupakan salah satu dari 10 program unggulan Wali Kota Kediri. Program ini memicu tumbuhnya kreativitas dan kemandirian masyarakat di Kota Kediri untuk memunculkan karakteristik kawasan, keunikan, budaya, keterampilan dan peningkatan potensi ekonomi di kelurahannya. Kesepuluh Kampung Keren Prodamas yang diluncurkan ini telah melewati verifikasi dan memenuhi kriteria yang ditetapkan oleh Pemerintah Kota Kediri yang bekerja sama dengan akademisi dari beberapa perguruan tinggi. “Kita ingin ada 46 Kampung Keren Prodamas tapi sekarang baru 10. Kampung Keren ini sebenarnya untuk memancing kreatifitas seluruh warga yang ada di kelurahan karena bisa kita lihat di era distrupsi ini seluruh masyarakat mencari spot-spot baru yang keren. Kalau kita lihat banyak spot-spot baru di Indonesia yang tumbuh perekonomiannya dari tempat-tepat keren seperti ini,” ujar Wali Kota Kediri.
                                </p>
                                <p>Adanya Kampung Keren Prodamas ini tentu dapat mendorong perekonomian yang ada di Kota Kediri. Apalagi akibat pandemi ini, perekonomian Kota Kediri terkoreksi cukup dalam. Diharapkan Kampung Keren Prodamas ini dapat membangkitkan perekonomian yang ada di Kota Kediri. Kampung Keren Prodamas ini harus terus dijaga dan dikembangkan agar semakin bagus. OPD-OPD yang ada di Kota Kediri harus bekolaborasi di kampung Keren Prodamas ini. “Saya mengajak kepada seluruh elemen di Kota Kediri untuk bisa menangkap peluang dari adanya tol dan bandara yang akan ada di Kediri. Tentu multiplier effectnya harus kita ambil. Saya berharap ini bisa membangkitkan perekonomian kita lagi. Saya yakin Kota Kediri akan melompat jauh lebih tinggi,” pungkasnya.</p>
                                <p>Kesepuluh Kampung Keren Prodamas tersebut adalah Kampung Tani Kelurahan Jamsaren, Kampung Winer (Wisata Kuliner) Kelurahan Kampung Dalem, Kampung Pecut Kelurahan Kemasan, Kampung Harmony Betta (Ikan Cupang) Kelurahan Ketami, Kampung Herbal Kelurahan Mojoroto, Kampung Heritage Kelurahan Pakelan, Kampung Seni Kelurahan Ringinanom, Kampung Tahu Kelurahan Tinalan, Kampung Wisata Air Sumber Banteng Kelurahan Tempurejo, dan Kampung Tenun Ikat Kelurahan Bandar Kidul.
                                </p>
                                <p>Peluncuran Kampung Keren Prodamas ini juga diisi sosialisasi Gempur Rokok Ilegal melalui hiburan guyonan dari Cak Percil. Kegiatan ini dihadiri oleh Sekretaris Daerah Kota Kediri, perwakilan Forkopimda Kota Kediri, Asisten, Kepala OPD, Lurah, LPMK, perwakilan perguruan tinggi, tim Prodamas Kota Kediri, Direktur BUMD Kota Kediri, dan peserta Magang Medeka Scale Up Prodamas Plus.
                                </p>
                            </div>
                        </div>

                        <div class="rightcolumn">
                            <div class="card-right bg-light">
                                <h5 class="card-header">Update Artikel</h5>
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
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    Akhir Card Audio --}}
</body>

</html>
@endsection
