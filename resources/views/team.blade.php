<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AAROGAN TEAM</title>
    <style>
        @import url("https://fonts.googleapis.com/css?family=Josefin+Sans:700|Lato:300,400&display=swap");

        body {
            text-rendering: optimizeLegibility;
            font-family: "Lato", sans-serif;
            /* background: #EFEFEF20 !important; */
            background: #eee !important;
            color: #707070 !important;
        }

        h1 {
            margin-top: 80px;
            margin-bottom: 80px;
            letter-spacing: 2px;
        }

        p {
            word-spacing: 5px;
            letter-spacing: 0.5px;
        }

        .img {
            border-radius: 0.5rem !important;
            -moz-box-shadow: 5px 5px 2px #ccc;
            -webkit-box-shadow: 5px 5px 2px #ccc;
            -khtml-box-shadow: 5px 5px 2px #ccc;
        }

        .container {
            max-width: 960px;
            margin: 0 auto;
        }

        .container-2 {
            max-width: 720px;
            margin: 0 auto;
        }

        .row {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }

        .col-md-3 {
            position: relative;
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
        }

        .col-md-3 {
            -ms-flex: 0 0 25%;
            flex: 0 0 25%;
            max-width: 25%;
        }

        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .text-center {
            text-align: center;
        }

        .right {
            margin-left: 78px;
        }

        .section {
            height: 100vh;
        }

        .section-2 {
            background-color: #fff;
            height: 100vh;
        }

        .mt-1 {
            padding-top: 70px !important;
        }

        .article {
            padding-top: 20px;
            font-size: 20px;
        }

        .article-1 {
            padding-top: 30px;
            font-size: 20px;
        }

        article {
            word-spacing: 7px;
            letter-spacing: 2px;
        }

    </style>
</head>

<body>
    <div class="container">
        <div class="section">
            <h1 class="text-center">~ AAROGAN TEAM ~</h1>
            <div class="row welcome">
                <div class="col-md-3">
                    <img class="img center" width="200px" src="{{ asset('img/DAFFA DZIBAN FADIA.jpg') }}" alt="Daffa">
                    <h2 class="text-center">Daffa Dizba Fadia</h2>
                    <p>Daffa merupakan seorang siswa di SMKN 1 Subang yang sedang menempuh studi di kelas Rekayasa
                        Perangkat
                        Lunak.</p>
                </div>
                <div class="col-md-3 right">
                    <img class="img center" width="200px" src="{{ asset('img/MIFTAH APRILIANDI MUNAWAR.jpg') }}"
                        alt="Miftah">
                    <h2 class="text-center">Miftah A Munawar</h2>
                    <p>Miftah merupakan seorang siswa di SMKN 1 Subang yang sedang menempuh studi di kelas Rekayasa
                        Perangkat Lunak.</p>
                </div>
                <div class="col-md-3 right">
                    <img class="img center" width="200px" src="{{ asset('img/IHSAN FAJAR RAMADHAN.jpg') }}" alt="Ihsan">
                    <h2 class="text-center">Ihsan Fajar Ramadhan</h2>
                    <p>Ihsan merupakan seorang siswa di SMKN 1 Subang yang sedang menempuh studi di kelas Rekayasa
                        Perangkat
                        Lunak.</p>
                </div>
            </div>
        </div>
        <div class="section-2">
            <h1 class="text-center mt-1">~ HIJRAH ~</h1>
            <div class="container-2">
                <article class="article">
                    Tema dari Lomba Web Development Dinamik 14 adalah "Harmonizing Human
                    and Machine in Society 5.0", dimana website tersebut dapat berkolaborasi dengan manusia.
                </article>
                <article class="article-1">
                    Web Hijrah memilih tema "Curhat kepada Al-Quran dan Hadist" dan Fitur utama Web Hijrah adalah Chatbot yang dipadukan dengan AI agar bisa bisa memberikan respon atau jawaban yang cepat dan tepat kepada user bila user bertanya tentang masalah yang dihadapinya.
                </article>
            </div>
        </div>
    </div>
</body>

</html>
