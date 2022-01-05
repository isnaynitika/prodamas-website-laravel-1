@extends('layouts.desain')
@section('main-tentang','active')
@section('kampungkeren','active')
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
                </div>
            </div>
            <!-- akhir jumbotrom -->


<body>
    <!-- awal jumbotron -->
    <div class="container-fluid banner">
        <div class="container banner-content">
            <h1>kampung</h1>
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
                                    <a href="#">This card has supporting text below as a natural lead-in to additional content.</a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="isi">
                                    <img src="img/sosial-budaya.jpg" class="card-img-top">
                                    <a href="#">This card has supporting text below as a natural lead-in to additional content.</a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="isi">
                                    <img src="img/sosial-budaya.jpg" class="card-img-top">
                                    <a href="#">This card has supporting text below as a natural lead-in to additional content.</a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="isi">
                                    <img src="img/sosial-budaya.jpg" class="card-img-top" alt="...">
                                    <a href="#">This card has supporting text below as a natural lead-in to additional content.</a>
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
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                                    This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                                </p>
                            </div>

                        <div class="col-md-4 mt-5">
                        <img src="img-tentang/herbal.JPG" class="img-fluid rounded-start" alt="Gambar" style="height:150px;">
                        </div>
                        <div class="col-md-8">
                        <div class="card-body item">
                            <h5 class="card-title">Kampung Herbal</h5>
                            <p class="card-text">Terletak di Kelurahan Mojoroto, Kecamatan Mojoroto, Kampung Herbal memiliki 
                                beberapa taman yang dikelola secara swadaya oleh masyarakat setempat, yaitu taman toga dan 
                                taman butorantas (buah, toga, sayuran dan tanaman hias). Di sini kita dapat menemukan sekitar 
                                150 varietas tanaman yang berhasil ditanam.
                            </p>
                        </div>

                        </div>
                    </div>
                </div>

                <div class="mb-3 kartu">
                    <div class="row g-0">
                        <div class="col-md-8">

                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                                    This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img src="img/sosial-budaya.jpg" class="img-fluid rounded-start">

                        <div class="card-body item">
                            <h5 class="card-title">Kampung Wisata Air Sumber Banteng</h5>
                            <p class="card-text">Berlokasi di Kelurahan Tempurejo, Kecamatan Pesantren. Kampung Wisata Air Sumber Banteng merupakan Sumber 
                                Banteng merupakan wisata alami yang airnya berasal dari sumber mata air yang tidak pernah kering. Ada banyak aktivitas yang 
                                bisa dilakukan di sini, mulai dari terapi ikan, menaiki perahu, berenang hingga memancing.
                            </p>
                        </div>
                        </div>
                        <div class="col-md-4 mt-5">
                        <img src="img-tentang/wisata air.JPG" class="img-fluid rounded-start" alt="Gambar" style="height:150px;">

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
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                                    This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                                </p>
                            </div>

                        <div class="col-md-4 mt-5">
                        <img src="img-tentang/Pecut.JPG" class="img-fluid rounded-start" alt="Gambar" style="height:150px;">
                        </div>
                        <div class="col-md-8">
                        <div class="card-body item">
                            <h5 class="card-title">Kampung Pecut</h5>
                            <p class="card-text">Di Kelurahan Kemasan, Kecamatan Kota., kita bisa menyaksikan pertunjukan Pecut Samandiman khas kediri. 
                                Yang membedakan Pecut Samandiman dengan pecut di daerah lain adalah bentuk pecutnya yang panjang, besar, dan juga berat. 
                                Rata-rata pecut samandiman mempunyai panjang sekitar 8 hingga 10 meter dengan berat mencapai hampir dua kilogram.
                            </p>
                        </div>

                        </div>
                    </div>
                </div>

                <div class="mb-3 kartu">
                    <div class="row g-0">
                        <div class="col-md-8">

                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                                    This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img src="img/sosial-budaya.jpg" class="img-fluid rounded-start">

                        <div class="card-body item">
                            <h5 class="card-title">Kampung Tahu</h5>
                            <p class="card-text">Kelurahan Tinalan, Kecamatan Pesantren menjadi sentra pembuatan tahu takwa sejak puluhan tahun lalu. 
                                Tak hanya pembuatan tahu saja, masyarakat kelurahan Tinalan juga membuat inovasi berbagai macam olahan makanan dari tahu. 
                                Diantaranya stik tahu, tahu walik, coklat tahu dan berbagai macam olahan tahu lainnya.
                            </p>
                        </div>
                        </div>
                        <div class="col-md-4 mt-5">
                        <img src="img-tentang/tahukediri.jpg" class="img-fluid rounded-start" alt="Gambar" style="height:150px;">

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
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                                    This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                                </p>
                            </div>

                        <div class="col-md-4 mt-5">
                        <img src="img-tentang/winner.JPG" class="img-fluid rounded-start" alt="Gambar" style="height:150px;">
                        </div>
                        <div class="col-md-8">
                        <div class="card-body item">
                            <h5 class="card-title">Kampung Winner</h5>
                            <p class="card-text">Terletak di Kelurahan Kampung Dalem, Kecamatan Kota, Kampung Winner menawarkan berbagai 
                                kuliner lezat yang siap memanjakan lidah anda. Jamu menjadi sajian andalan di kampung ini. Terdapat 61 warga 
                                yang terdaftar sebagai produsen jamu di Kampung Dalem. Selain jamu, komoditi unggulan lainnya yakni es puter dan rujak buah.
                            </p>
                        </div>

                        </div>
                    </div>
                </div>

                <div class="mb-3 kartu">
                    <div class="row g-0">
                        <div class="col-md-8">

                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                                    This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img src="img/sosial-budaya.jpg" class="img-fluid rounded-start">

                        <div class="card-body item">
                            <h5 class="card-title">Kampung Tenun Ikat</h5>
                            <p class="card-text">Kampung Tenun Ikat yang terletak di Kelurahan Bandar Kidul, kecamatan Pesantren ini 
                                merupakan sentra kerajinan tenun ikat Kediri yang sudah berdiri sejak tahun 1950-an. Sekitar 12 rumah 
                                industri tenun yang berada di kampung ini rata-rata dikerjakan secara turun temurun hingga tiga generasi. 
                                Tak hanya produksi dalam bentuk lembaran kain, Kampung Tenun Ikat Bandar juga membuat berbagai produk 
                                bernuansa kain tenun. Mulai syal, sepatu, topi, sarung tenun, dan tas souvenir
                            </p>
                        </div>
                        </div>
                        <div class="col-md-4 mt-5">
                        <img src="img-tentang/tenun.JPG" class="img-fluid rounded-start" alt="Gambar" style="height:150px;">
                        </div>
                    </div>
                </div>

                <div class="mb-3 kartu">
                    <div class="row g-0">
                        <div class="col-md-4 mt-5">
                        <img src="img-tentang/kampungseni2.jpg" class="img-fluid rounded-start" alt="Gambar" style="height:150px;">
                        </div>
                        <div class="col-md-8">
                        <div class="card-body item">
                            <h5 class="card-title">Kampung Seni</h5>
                            <p class="card-text">kampung Seni berlokasi di Kelurahan Ringin Anom, Kecamatan Kota. Di sini kita bisa 
                                menyaksikan anak-anak muda bermain alat musik tradisional jaranan sampai yang modern, ibu-ibu PKK 
                                bermain alat musik tradisional dengan genre templingan yang dimasuki fragmen drama dengan disisipi 
                                pesan-pesan moral dan pertunjukan musik keroncong. 
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