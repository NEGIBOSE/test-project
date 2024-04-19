<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Chara-Books</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap"
      rel="stylesheet"
    />

    <!-- CSSファイルの読み込み -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />

  </head>
  <body>
    <header class="header">
        <div class="title">Chara-Books</div>
        <div class="logout">
            
            @csrf
            </form>
        </div>
        <div class="signin">
        </div>
    </header>
    <main class="home">
      <div class="home_upper"></div>
      <div class="home_middle">
        <div class="home_icon"></div>
        <div class="home_pic">
          <img id="myImage" src="" alt="Image" />
        </div>
      </div>
      <div class="home_select">
        <div class="home_select_u">
          <div class="select_text bg_red">
            <a href="{{ route('home.search') }}">読み聞かせ</a>
          </div>
          <div class="select_text bg_yellow">
            <a href="#">本棚</a>
          </div>
        </div>
        <div class="home_select_l select_text">
          <a href="#">成長記録を見る</a>
        </div>
      </div>
    </main>
    <footer>&copy; 2024 My portfolio</footer>
    <!-- JavaScriptファイルの読み込み -->
<script>
    window.onload = function () {
        var images = [
        "/images/picture1.png",
        "/images/picture2.png",
        "/images/picture3.png",
        "/images/picture4.png",
        "/images/picture5.png",
        "/images/picture6.png",
        "/images/picture7.png",
        "/images/picture8.png",
        "/images/picture9.png",
    ];

  var randomIndex = Math.floor(Math.random() * images.length);
  var randomImage = images[randomIndex];

  var img = document.getElementById("myImage");
  img.src = randomImage;
};

</script>
    <script
      defer
      src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"
    ></script>
  </body>
</html>
