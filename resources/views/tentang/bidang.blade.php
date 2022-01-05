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
                    <div class="col cakupan">
                        <p>
                        Cakupan Bidang Prodamas Plus yang terdiri dari 6 bidang : 
                        Ekonomi, Sosial Budaya, Infrastruktur, Kesehatan, Pendidikan, kepemudaan.
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
                                    <p>Untuk meningkatkan keberdayaan masyarakat di bidang ekonomi, 
                                        anggaran Prodamas dialokasikan terutama untuk mendukung pengembangan usaha kecil, 
                                        sekaligus sebagai jalan mewujudkan salah satu program unggulan Pemkot Kediri, 
                                        yaitu mewujudkan 15.000 Wirausahawan baru.</p>
                                </div>
                                <div class="item">
                                    <img src="img-tentang/Ekonomi.jpg" alt="Gambar">
                                </div>
                            </div>
                        </div>
                        <div class="col-md4 mb-4">
                            <div class="box">
                                <div class="item">
                                    <img src="img-tentang/Sosial Budaya.jpg" alt="Gambar">
                                </div>
                                <div class="item">
                                    <h1>SOSIAL BUDAYA</h1>
                                    <p>Prodamas juga dialokasikan untuk pengadaan sarana pengembangan seni budaya, 
                                        olah raga dan kegiatan sosial kemasyarakatan di tingkat RT, 
                                        seperti pengadaan alat kesenian tradisional maupun modern, peralatan pendukung 
                                        kegiatan olah raga prestasi, dan peralatan pendukung kegiatan sosial kemasyarakatan lainnya.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md4 mb-4">
                            <div class="box">
                                <div class="item">
                                    <h1>INFRASTRUKTUR</h1>
                                    <p>Pengalokasian anggaran Prodamas untuk peningkatan pembangunan infrastruktur berskala kecil 
                                        di tiap RT berdampak pada penyerapan tenaga kerja dari warga lingkungan RT setempat</p>
                                </div>
                                <div class="item">
                                    <img src="img-tentang/Infrastruktur.jpg" alt="Gambar">
                                </div>
                            </div>
                        </div>
                        <div class="col-md4 mb-4">
                            <div class="box">
                                <div class="item">
                                    <img src="img-tentang/Kesehatan.jpg" alt="Gambar">
                                </div>
                                <div class="item">
                                    <h1>KESEHATAN</h1>
                                    <p>Guna mendukung terwujudnya program Universal Health Coverage (UHC), 
                                        Prodamas Plus  dialokasikan untuk pembayaran iuran BPJS Kesehatan 
                                        kelas 3 bagi seluruh masyarakat yang belum terdaftar BPJS Kesehatan maupun 
                                        alih kepesertaan dari Peserta Mandiri menjadi peserta yang dibiayai oleh 
                                        anggaran Prodamas Plus.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md4 mb-4">
                            <div class="box">
                                <div class="item">
                                    <h1>PENDIDIKAN</h1>
                                    <p>Prodamas plus mendukung terciptanya kesempatan yang sama kepada seluruh masyarakat 
                                        Kota Kediri untuk mendapatkan pendidikan berkualitas baik formal maupun non-formal 
                                        seperti pengadaan sarana prasarana TPA/TPQ dan pelatihan keterampilan kerja dan 
                                        Pengadaan sarana prasarana program Quran Massive (program unggulan Pemkot Kediri 
                                        untuk memberantas buta huruf Al Quran).</p>
                                </div>
                                <div class="item">
                                    <img src="img-tentang/Pendidikan.jpg" alt="Gambar">
                                </div>
                            </div>
                        </div>

                        <div class="col-md4 mb-4">
                            <div class="box">
                                <div class="item">
                                    <img src="img-tentang/Kepemudaan.jpg" alt="Gambar">
                                </div>
                                <div class="item">
                                    <h1>KEPEMUDAAN</h1>
                                    <p>Prodamas plus mendukung potensi yang dimiliki pemuda yang ada di Kota Kediri khususnya 
                                        karang taruna untuk saling berbagi keterampilan yang dimiliki dan disalurkan kepada 
                                        anak-anak yang ada di masing-masing daerah.</p>
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