<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        @import url("https://fonts.googleapis.com/css?family=Josefin+Sans:700|Lato:300,400&display=swap");
        @import url("https://fonts.googleapis.com/css?family=Ubuntu+Mono&display=swap");

        .container {
            width: 100%;
            padding: 0 15px;
            margin: 0 auto;
        }

        @media (min-width: 576px) {
            .container {
                max-width: 540px;
            }
        }

        @media (min-width: 768px) {
            .container {
                max-width: 720px;
            }
        }

        @media (min-width: 992px) {
            .container {
                max-width: 960px;
            }
        }

        @media (min-width: 1200px) {
            .container {
                max-width: 1140px;
            }
        }

        .light {
            font-weight: 300;
            margin-left: 15px;
        }

        .text-right {
            text-align: right;
        }

        .btn {
            padding: 5px 30px;
            border-radius: 3rem;
            border: 1px solid #707070;
        }

        .btn-daftar {
            border: 1px solid #007bff;
            color: #007bff;
            transition: 0.5s;
        }

        .btn-daftar:hover {
            background-color: #eee;
        }

        .btn-masuk {
            border: 1px solid #007bff;
            background-color: #007bff;
            color: #fff;
            -webkit-transition: 0.5s;
            transition: 0.5s;
            cursor: pointer;
        }

        .btn-masuk:hover {
            background-color: #009fff;
        }

        .button {
            padding: 8px 20px;
            text-decoration: none;
        }

        * {
            margin: 0;
            padding: 0;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        html,
        body {
            text-rendering: optimizeLegibility;
            font-family: "Lato", sans-serif;
            background: #EFEFEF20 !important;
            color: #707070 !important;
        }

        a {
            color: #707070;
        }

        .row {
            height: 100%;
            width: 100%;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .login-panel {
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            width: 60%;
            height: 70vh;
            -webkit-box-shadow: 0px 1px 5px #707070;
            box-shadow: 0px 1px 5px #707070;
        }

        .login-panel .form-section {
            width: 45%;
            height: 100%;
            padding: 40px;
            display: inline-block;
        }

        .login-panel .form-section .display-4 {
            letter-spacing: 0.7px;
        }

        .login-panel .form-section .welcoming {
            margin-top: 40px;
        }

        .login-panel .form-section .lead {
            font-weight: 300;
            font-size: 14pt;
            margin-top: 15px;
        }

        .login-panel .form-section form {
            margin-top: 15px;
        }

        .login-panel .form-section form .input-group {
            width: 100%;
        }

        .login-panel .form-section form .input-group .checkbox-wrapper .checkbox-label {
            position: relative;
        }

        .login-panel .form-section form .input-group .checkbox-wrapper .checkbox-label input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
        }

        .login-panel .form-section form .input-group .checkbox-wrapper .checkbox-label input:checked~.checkbox-custom {
            background-color: #EFEFEF20;
            border-radius: 5px;
            -webkit-transform: rotate(0) scale(1);
            transform: rotate(0) scale(1);
            opacity: 1;
            border: 1px solid #707070;
        }

        .login-panel .form-section form .input-group .checkbox-wrapper .checkbox-label input:checked~.checkbox-custom::after {
            -webkit-transform: rotate(45deg) scale(1);
            transform: rotate(45deg) scale(1);
            opacity: 1;
            left: 8px;
            top: 3px;
            width: 6px;
            height: 12px;
            border: solid #007bff;
            border-width: 0 2px 2px 0;
            background-color: transparent;
            border-radius: 0;
        }

        .login-panel .form-section form .input-group .checkbox-wrapper .checkbox-label .checkbox-custom {
            position: absolute;
            top: 0;
            left: 0;
            height: 24px;
            width: 24px;
            background-color: transparent;
            border-radius: 5px;
            border: 1px solid #707070;
        }

        .login-panel .form-section form .input-group .checkbox-wrapper .checkbox-label .checkbox-custom::after {
            position: absolute;
            content: "";
            left: 12px;
            top: 12px;
            height: 0px;
            width: 0px;
            border-radius: 5px;
            border: solid #007bff;
            border-width: 0 3px 3px 0;
            -webkit-transform: rotate(0) scale(0);
            transform: rotate(0) scale(0);
            opacity: 1;
        }

        .login-panel .form-section form .input-group .input-wrapper {
            border: 1px solid #707070;
            padding: 7px 20px;
            position: relative;
        }

        .login-panel .form-section form .input-group .input-wrapper .on-focus {
            -webkit-transition: all 1s;
            transition: all 1s;
        }

        .login-panel .form-section form .input-group .input-wrapper:focus-within .on-focus {
            position: absolute;
            left: 0;
            top: 0;
            width: 1%;
            height: 100%;
            background: #007bff;
        }

        .login-panel .form-section form .input-group .input-wrapper label {
            font-size: 10pt;
            display: block;
            margin-bottom: 3px;
        }

        .login-panel .form-section form .input-group .input-wrapper .input {
            border: none;
            width: 100%;
            font-size: 11pt;
            font-family: 'Ubuntu Mono', monospace;
            background: transparent;
        }

        .login-panel .form-section form .input-group .input-wrapper .input:focus {
            outline: none;
        }

        .login-panel .hero-form {
            background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTRuzhFyeY3Xyv-AxS4D_-T_JT7Ut5BrmM8uumYpNuxup_zcGUY");
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            width: 55%;
            height: 100%;
            display: inline-block;
        }

        .between {
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }

        .mt-3 {
            margin-top: 10px;
        }

        .mt-5 {
            margin-top: 30px;
        }

        .bt-0 {
            border-top: none !important;
        }

        .blue:hover {
            color: #007bff;
        }

    </style>
</head>

<body>
    @if (Route::has('login'))
        
    @endif
    <div class="container">
        <div class="login-panel">
            <div class="row">
                <div class="form-section">
                    <h2 class="display-4">Hijrah</h2>
                    <h2 class="display-4 welcoming">Dapatkan solusi dari masalah yang anda dapat.</h2>
                    <p class="lead">Selamat datang !</p>

                    <form action="{{ url('login') }}" method="post">
                        @csrf
                        <div class="input-group">
                            <div class="input-wrapper">
                                <div class="on-focus"></div>
                                <label for="email">Alamat Email</label>
                                <input type="email" class="input email" name="email" id="email"
                                    placeholder="muhamad@gmail.com" autofocus>
                            </div>
                            <div class="input-wrapper bt-0">
                                <div class="on-focus"></div>
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="input email"
                                    placeholder="********">
                            </div>
                            <div class="row between mt-3">
                                <div class="checkbox-wrapper">
                                    <!-- <label class="checkbox-label">
                                        <input id="checkbox" type="checkbox">
                                        <span class="checkbox-custom"></span>
                                    </label> -->
                                </div>
                                <div>
                                    <a class="blue" href="/lupa">Lupa Password ?</a>
                                </div>
                            </div>
                        </div>
                        <div class="row between mt-5">
                            <a href="/register" class="button btn-daftar">Daftar</a>
                            <button type="submit" class="button btn-masuk">Masuk</button>
                        </div>
                    </form>
                </div>
                <div class="hero-form"></div>
            </div>
        </div>
    </div>

</body>

</html>
