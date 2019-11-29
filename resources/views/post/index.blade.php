<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beranda</title>
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/index.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/forum.css') }}">
        <title>Forum</title>
    </head>

    <body>
        <div class="container">
            <div class="hero-section">
                <div class="row between-xs middle-xs">
                    <div class="col-xs-2">
                        <a href="#" class="brand">
                            <img src="{{ asset('img/logo.png') }}" class="logo" alt="">
                            Hijrah
                        </a>
                    </div>
                    <div class="col-xs-3 text-right">
                        <a href="/posts/create" class="register">Buat Post</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="main-forum">
                <div class="row">
                    <div class="col-xs-2 col-xs-offset-1">
                        <div class="group-button">
                            <div class="section-button active"><a href="#" class="sec-link"><i class="icon ion-ios-help-circle-outline sec-icon"></i>My Questions</a></div>
                            <div class="section-button"><a href="#" class="sec-link"><i class="icon ion-ios-checkmark-circle-outline sec-icon"></i>Replied</a></div>
                            <div class="section-button"><a href="#" class="sec-link"><i class="icon ion-ios-close-circle-outline sec-icon"></i>Unreplied</a></div>
                        </div>
                    </div>

                    <div class="col-xs-8">
                        <div class="forum-lists">
                            @foreach($posts as $post)
                            <div class="forum-content">
                                <a href="/posts/{{ $post->id }}">
                                    <h1 class="headline-title">{{$post->title}}</h1>
                                </a>
                                <div class="headline-statistics">
                                    <p class="user statistic">{{ $post->user->name }}</p>
                                    <p class="status statistic">replied</p>
                                    <p class="time statistic">{{$post->created_at}}</p>
                                    <div class="stride statistic"></div>
                                    <p class="time statistic">0 Balasan</p>
                                </div>

                                <div class="tags">
                                    <div class="tag-btn marah">{{ $post->cat_id == 1 ? 'Marah' : ''}}</div>
                                </div>

                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </body>

    </html>
</body>

</html>