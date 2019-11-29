<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/quill.snow.css') }}">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="{{ asset('css/forum.css') }}">

    <!-- Javascript -->
    <script defer src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script defer src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/Forum.js') }}"></script>
    <script>
        window.addEventListener('DOMContentLoaded', () => {
            forum = new Forum()
            forum.createView()
        })
    </script>

    <title>Document</title>
</head>

<body>
    <div class="container-editor">
        <form action="{{ route('posts.store') }}" id="form" method="post">
            @csrf
            <input type="hidden" name="content" id="content">
            <input type="hidden" name="title" id="title">

            <div id="text">
                <h1 class="title">Judul</h1>
                <!-- <div class="row">
                    <img src="https://middle.pngfans.com/20190503/xi/user-profile-png-computer-icons-clipart-57203c31efd47d9a.jpg" alt="" class="user-profile">
                    <p>USER</p>
                </div> -->
                <p>Mulai menulis</p>
            </div>
            <div class="tag-container"><input type="text" name="category" id="tags" class="tag-input" placeholder="Masukkan tag disini">
            </div>
        </form>
        <a href="#" class="btn btn-post">Post</a>
        <a href="/posts" class="btn btn-post1">Kembali</a>
    </div>
</body>

</html>