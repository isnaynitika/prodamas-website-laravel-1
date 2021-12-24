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
    <link rel="stylesheet" href="css/tuliscerita.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>

</head>

<body>

    <!-- awal jumbotron -->
    <div class="container-fluid banner">
        <div class="container banner-content">
            <h1>Tulis Cerita</h1>
        </div>
    </div>
    <!-- akhir jumbotrom -->

    {{-- Form Tulis Cerita --}}
    <div class="container formBox">
        <h2> Apa Ceritamu tentang <b> PRODAMAS </b>?</h2>
        <div class="formBox2">
            <form action="">
                <div class="row">
                    <div class="col-8">
                        <div class="col-auto formInput">
                            <label class="visually-hidden" for="autoSizingInputGroup">namaLengkap</label>
                            <div class="input-group">
                              <div class="input-group-text">@</div>
                              <input type="text" class="form-control" id="autoSizingInputGroup" placeholder="Nama Lengkap">
                            </div>
                        </div>
                        <div class="col-auto formInput">
                            <label class="visually-hidden" for="autoSizingInputGroup">noTelepon</label>
                            <div class="input-group">
                              <div class="input-group-text">@</div>
                              <input type="number" class="form-control" id="autoSizingInputGroup" placeholder="Nomor Telepon">
                            </div>
                        </div>
                        <div class="col-auto formInput">
                            <label class="visually-hidden" for="autoSizingInputGroup">email</label>
                            <div class="input-group">
                              <div class="input-group-text">@</div>
                              <input type="text" class="form-control" id="autoSizingInputGroup" placeholder="E-Mail">
                            </div>
                        </div>
                        <div class="col-auto formInput">
                            <label class="visually-hidden" for="autoSizingInputGroup">judul</label>
                            <div class="input-group">
                              <div class="input-group-text">@</div>
                              <input type="text" class="form-control" id="autoSizingInputGroup" placeholder="Judul">
                            </div>
                        </div>
                        <div class="row formInput">
                            <div class="col  ">
                                <label for="formFileLg" class="form-label">Upload Thumbnail</label>
                                <input class="form-control form-control" id="formFileLg" type="file" />
                            </div>
                            <div class="col  ">
                                <label for="formFileLg" class="form-label">Upload Foto Cerita</label>
                                <input class="form-control form-control" id="formFileLg" type="file" />
                            </div>
                        </div>
                        {{-- Teks area awal --}}
                        <div class="formInput">
                            <textarea name="content" id="editor">
                                &lt;p&gt;Tulis ceritamu disini.&lt;/p&gt;
                            </textarea>
                            <script>
                                ClassicEditor
                                    .create( document.querySelector( '#editor' ) )
                                    .catch( error => {
                                        console.error( error );
                                    } );
                            </script>
                        </div>
                        {{-- Teks area akhir --}}

                    </div>
                    <div class="col">
                        <p> <i>Segala informasi dalam <font class="redText"> prodamas.com</font> diterbitkan dengan tujuan baik dan hanya untuk tujuan informasi secara umum.
                            Dengan mengirimkan tulisan ke <font class="redText"> prodamas.com</font>, penulis telah setuju bahwa tulisan dan foto yang tercantum dapat diedit
                             oleh tim <font class="redText"> prodamas.com</font>. Selain itu, penulis juga bersedia bahwa konten yang dibuat akan dipublikasikan di seluruh media sosial + Kota Kediri.
                        </i></p>
                        <button type="submit" class="btn btn-primary submitBtn">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


  </body>
</html>
@endsection
