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
  <link rel="stylesheet" href="{{ asset('/css/artikel.css') }}">

</head>

<body>
<!-- Content -->
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
                    <img src="{{ asset('img/tentangProdamas.jpeg') }}" alt="" style="height:100%;">
                </div><br>
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
                        <h5>kampung Keren</h5>
                        <div class="row">
                            <div class="col-xl-3">
                                <img src="{{ asset('img/slide1.jpeg') }}" width="100%" alt="Cinque Terre">
                            </div>
                            <div class="col-sm-9">
                                <p>Kampung Keren Prodamas merupakan salah satu dari 10 program unggulan Wali Kota Kediri. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="caption">
                        <h5>Kampung Keren</h5>
                        <div class="row">
                            <div class="col-xl-3">
                                <img src="{{ asset('img/slide2.jpeg') }}" width="100%" alt="Cinque Terre">
                            </div>
                            <div class="col-sm-9">
                                <p>Kampung Keren Prodamas merupakan salah satu dari 10 program unggulan Wali Kota Kediri. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="caption">
                        <h5>Kampung Keren</h5>
                        <div class="row">
                            <div class="col-xl-3">
                                <img src="{{ asset('img/slide3.jpeg') }}" width="100%" alt="Cinque Terre">
                            </div>
                            <div class="col-sm-9">
                                <p>Kampung Keren Prodamas merupakan salah satu dari 10 program unggulan Wali Kota Kediri. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="caption">
                        <h5>Kampung Keren</h5>
                        <div class="row">
                            <div class="col-xl-3">
                                <img src="{{ asset('img/slide4.jpeg') }}" width="100%"alt="Cinque Terre">
                            </div>
                            <div class="col-sm-9">
                                <p>Kampung Keren Prodamas merupakan salah satu dari 10 program unggulan Wali Kota Kediri. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-right bg-light">
                <h5 class="card-header">Kunjungi Website</h5>
                    <ul class="list-group list-group-flush">
                        <a class="list-group-item" href="https://www.kedirikota.go.id/">Pemerintah Kota Kediri</a>
                        <a class="list-group-item" href="https://prodamasplus.kedirikota.go.id/auth/login">Progressio</a>
                        <a class="list-group-item" href="https://survey123.arcgis.com/share/932769e15a27418aa9b448b0b1e6b6b6">Bank Sampah</a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<!-- Akhir content -->
</body>
</html>
@endsection
