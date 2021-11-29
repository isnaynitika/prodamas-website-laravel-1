<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi</title>
    
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/mycss.css') }}}">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap');
        body {
            font-family: times new roman;
        }

        .container-awal{
            margin-top: 50px;
        }

        .sidebar {
            margin: 20px;
            padding: 0;
            width: 250px;
            position: fixed;
            height: 100%;
        }

        .sidebar a {
            display: block;
            color: #35333A;
            padding: 10px;
            text-decoration: none;
        }

        /*.sidebar a:active {
            background-color: #FFFFFF;
            color: #35333A;
            border-radius: 1px;
            box-shadow: 0 4px 5px 0 rgba(186, 85, 211), 0 6px 15px 0 rgba(186, 85, 211, 0.25);
            text-decoration: none;
        }*/

        .sidebar a:hover{
            background-color: #FFFFFF;
            color: #35333A;
            border-radius: 1px;
            box-shadow: 0 4px 5px 0 rgba(186, 85, 211), 0 6px 15px 0 rgba(186, 85, 211, 0.25);
            text-decoration: none;
        }

        div.content {
            margin-left: 300px;
            padding: 1px 16px;
            height: 90vh;
            display: block;
            width: 70%;
        }

        @media screen and (max-width: 700px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }

            .sidebar a {
                float: center;
            }

            div.content {
                margin-left: 0;
            }
        }

        @media screen and (max-width: 400px) {
            .sidebar a {
                text-align: center;
                float: none;
            }
        }

        .border{
            background-color: #FFFFFF;
            margin-top: 10px;
            border-radius: 10px;
            min-height: 2vh;
            max-height: max-content ;
            box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            padding: 20px;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <div class="container_awal">
        <div class="border">
            <p ><i style="width: 150px; margin-top:60px;"></i>SEKTOR</p>
            <a class="active" href="{{ url('regulasi') }}"><i style="margin-right: 20px; margin-left: 10px;"></i>Regulasi Prodamas</a>
            <a href="{{ url('umkm') }}"><i style="margin-right: 20px; margin-left: 10px;"></i>UMKM</a>
            <a href="{{ url('pendidikan') }}"><i style="margin-right: 20px; margin-left: 10px;"></i>Pendidikan</a>
            <a href="{{ url('pojokbaca') }}"><i style="margin-right: 20px; margin-left: 10px;"></i>Pojok Baca</a>
            <a href="{{ url('kampungkeren') }}"><i style="margin-right: 20px; margin-left: 10px;"></i>Kampung Keren</a>

        </div>
        </div>
    </div> <!--div side bar-->

    <div class="content">
        @yield('sektor')
    </div><!--div content-->

    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootsrap.min.js') }}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>