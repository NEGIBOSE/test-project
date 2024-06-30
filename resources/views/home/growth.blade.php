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
    <style>
      .growth_middle{
        width: 97%;
        margin: 0 auto;
        padding: 8px;
        height: 100vh;
        overflow:auto;
        border-radius:8px;
      }
      .growth_contents {
        display: flex;
        flex-wrap: wrap; /* コンテンツが折り返されるように設定 */
      }

      .growth_cont {
        margin: 5px; /* コンテンツの間隔を設定 */
        box-sizing: border-box; /* マージンやパディングを含めた全体の幅を計算する */
      }

      .growth_bottom {
        width:100%;
        display:flex;
        justify-content:center;
      }
      .select_text{
        width:auto;
      }
    </style>
  </head>
  <body>
    <header class="header bg_green">
        <div class="title">Chara-Books</div>
    </header>
    <main class="growth bg_green">
      <div class="growth_upper">
        
      </div>
      <div class="growth_middle bg_gray">
      <ul class="growth_contents">
    @foreach ($illustrations as $illustration)
    <li class="growth_cont chara_pic">
        <img src="{{ $illustration->image_url }}" alt="Illustration">
    </li>
    @endforeach
</ul>

      </div>
      <div class="bookshelf_bottom">
        <div class="select_text bg_green">
              <a href="{{ route('home.index') }}">HOMEへ戻る</a>
        </div>

      </div>
    </main>
    <footer>&copy; 2024 My portfolio</footer>
    <!-- JavaScriptファイルの読み込み -->
    <script
      defer
      src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"
    ></script>
  </body>
</html>
