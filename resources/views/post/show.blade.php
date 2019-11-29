<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">`
    <meta name="viewport" con1tent="width=device-width, initial-scale=1.0">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/quill.snow.css') }}">
    <link rel="stylesheet" href="{{ asset('css/forum.css') }}">


    <script>var content = {!! $post->content !!} </script>
    <script src="{{ asset('js/Show.js') }}"></script>

    <style>
    .ql-container.ql-snow {
        border: none;
    }

    .comment {
        margin-top: 20px;
        height: 43px;
        width: 400px;
        padding: 10px 15px;
    }

    .btn {
        height: 43px;
        border-radius: 0 ;
        margin-left: 10px;
        color: #fff;
        background-color: #005bff;
        cursor: pointer;
    }
    </style>

    <title>Post User</title>
</head>

<body>
    <div class="container-blog">
        <div id="text"></div>
        <form action="#">
            @csrf
            <input class="comment" type="text" placeholder="Berikan Komentar . . .">
            <button type="submit" class="btn btn-primary">Kirim</button>
        </form>

    </div>
</body>

</html>