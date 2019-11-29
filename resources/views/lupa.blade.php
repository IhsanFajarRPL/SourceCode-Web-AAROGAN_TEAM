<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lupa Password</title>
    <style>
        html,
        body {
            text-rendering: optimizeLegibility;
            font-family: "Lato", sans-serif;
            background: #EFEFEF20 !important;
            color: #707070 !important;
        }

        .btn {
            float: right;
            font-weight: 400;
            text-align: center;
            border: 1px solid transparent;
            padding: .375rem .75rem;
            margin-top: 15px;
            margin-left: 15px;
            font-size: 14px;
            line-height: 1.5;
            cursor: pointer;
            text-decoration: none;
        }

        .btn-primary {
            color: #fff;
            background-color: #007bff;
            border-color: #007bff;
            transition: 0.5s;
        }

        .btn-primary:hover {
            background-color: #009fff;
        }

        .btn-white {
            border: 1px solid #007bff;
            color: #007bff;
            transition: 0.5s;
        }

        .btn-white:hover {
            background-color: #eee;
        }

        .container {
            max-width: 500px;
            margin: 0 auto;
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

        .alert {
            display: inline-block;
            color: red;
            font-size: 15px;
            font-family: sans-serif;
            margin-top: 25px;
        }

        .hidden {
            display: hidden !important;
        }

    </style>
</head>

<body>
    <div class="container">
        <div class="login-panel">
            <div class="form-section">
                <h2>Lupa Password</h2>
                <form action="/lupa/password" method="POST">
                @csrf
                    <div class="input-group">
                        <div class="input-wrapper">
                            <div class="on-focus"></div>
                            <label for="email">Alamat Email</label>
                            <input type="email" class="input" name="email" id="email" placeholder="muhamad@gmail.com"
                                autofocus>
                        </div>
                    </div>
                    @if (session('status'))
                    <p class="alert">{{ session('status') }}</p>
                    @endif
                    <button type="submit" class="btn btn-primary">Kirim</button>
                    <a href="/login" class="btn btn-white">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>