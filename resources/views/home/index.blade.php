<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Chara-Books</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <style>
        .home_icon {
            display: flex;
            align-items: center;
            border-radius: 8px;
            padding: 0px 8px;
            margin-bottom: 8px;
        }
        .home_icon svg {
            width: 28px;
        }
        .home_pic {
            border-radius: 16px;
            overflow: hidden;
            position: relative;
        }
        .home_pic img {
            width: 100%;
            display: block;
        }



    </style>
</head>
<body>
<header class="header">
    <div class="title">
        <img src="/images/chara_logo.png" alt="png Image">
    </div>
    <div class="logout">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"><path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h280v80H200v560h280v80H200Zm440-160-55-58 102-102H360v-80h327L585-622l55-58 200 200-200 200Z"/></svg>
                
            </button>
        </form>
    </div>
</header>
<main class="home">
    <div class="home_upper"></div>
    <div class="home_middle">
        <div class="home_icon">
            @foreach($categories as $category)
                <div>{!! $category->mark !!}</div>
            @endforeach
        </div>
        <div class="home_pic chara_pic">
            @if($latestIllustration)
                <img src="{{ asset($latestIllustration->image_url) }}" alt="Illustration Image" />
            @else
                <img src="{{ asset($defaultImage) }}" alt="Default Image" />
            @endif
        </div>
    </div>
    <div class="home_select">
        <div class="home_select_u">
            <div class="select_text bg_red">
                <a href="{{ route('home.search') }}">読み聞かせ</a>
            </div>
            <div class="select_text bg_yellow">
                <a href="{{ route('home.bookshelf') }}">本棚</a>
            </div>
        </div>
        <div class="home_select_l select_text bg_green">
            <a href="{{ route('home.growth') }}">成長記録</a>
        </div>
    </div>
</main>
<footer>&copy; 2024 My portfolio</footer>

<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</body>
</html>
