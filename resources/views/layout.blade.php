<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Instalasi Teknologi Komunikasi dan Informasi">
        <meta name="keywords" content="ITKI, RSDS">

        <title>Input nama ANDA</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('/css/ogi.css') }}" rel="stylesheet">

    </head>
    <body>
            <div class = "header">
                <h1>HEADER</h1>
            </div>

            <div class = "container">
                <div class = "sidenav">
                    <a href ="/home">Home</a>
                    <a href = "/">Form Input</a>
                </div>

                <div class = "content">
                    @yield('content')
                </div>
            </div>

            <div class = "footer">
                <h1>FOOTER</h1>
            </div>
    </body>
</html>
