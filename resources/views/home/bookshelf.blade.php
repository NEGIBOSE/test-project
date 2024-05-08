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
      .search_input{
        display:flex;
      }
      .search_input input{
        width:70%;
      }
      .search_input button{
        width:30%;
      }
      .bookshelf_middle{
        width: 97%;
        margin: 0 auto;
        padding:8px;
        height: 100vh;
        overflow:auto;
      }
      .bookshelf_contents {
        display: flex;
        flex-wrap: wrap; /* コンテンツが折り返されるように設定 */
      }

      .bookshelf_cont {
        width: calc(33.33% - 10px); /* 3列に分割し、間隔を設定 */
        margin: 5px; /* コンテンツの間隔を設定 */
        box-sizing: border-box; /* マージンやパディングを含めた全体の幅を計算する */
      }

      .bookshelf_bottom {
        width:100%;
      }
      .select_text{
        width:auto;
      }

    </style>
  </head>
  <body>
    <header class="header">
        <div class="title">Chara-Books</div>
    </header>
    <main class="bookshelf">
      <div class="bookshelf_upper">
        <div class="bookshelf_search">
          <div class="search_input">
            <input
              type="text"
              id="searchTerm"
              placeholder="Search for a book..."
              class="select_text"
            />
            <button onclick="searchBooks()" class="select_text">Search</button>
          </div>
          <div id="searchResults" class="searchResults">
            <!-- 検索結果がここに表示されます -->
          </div>
        </div>
      </div>
      <div class="bookshelf_middle bg_gray">
        <ul class="bookshelf_contents">
          <li class="bookshelf_cont">
            <img src="{{ asset('images/harry_potter.jpg') }}" alt="">
          </li>
          <li class="bookshelf_cont">
            <img src="{{ asset('images/harry_potter.jpg') }}" alt="">
          </li>          <li class="bookshelf_cont">
            <img src="{{ asset('images/harry_potter.jpg') }}" alt="">
          </li>          <li class="bookshelf_cont">
            <img src="{{ asset('images/harry_potter.jpg') }}" alt="">
          </li>          <li class="bookshelf_cont">
            <img src="{{ asset('images/harry_potter.jpg') }}" alt="">
          </li>          <li class="bookshelf_cont">
            <img src="{{ asset('images/harry_potter.jpg') }}" alt="">
          </li>          <li class="bookshelf_cont">
            <img src="{{ asset('images/harry_potter.jpg') }}" alt="">
          </li>          <li class="bookshelf_cont">
            <img src="{{ asset('images/harry_potter.jpg') }}" alt="">
          </li>          <li class="bookshelf_cont">
            <img src="{{ asset('images/harry_potter.jpg') }}" alt="">
          </li>          <li class="bookshelf_cont">
            <img src="{{ asset('images/harry_potter.jpg') }}" alt="">
          </li>          <li class="bookshelf_cont">
            <img src="{{ asset('images/harry_potter.jpg') }}" alt="">
          </li>          <li class="bookshelf_cont">
            <img src="{{ asset('images/harry_potter.jpg') }}" alt="">
          </li>          <li class="bookshelf_cont">
            <img src="{{ asset('images/harry_potter.jpg') }}" alt="">
          </li>          <li class="bookshelf_cont">
            <img src="{{ asset('images/harry_potter.jpg') }}" alt="">
          </li>          <li class="bookshelf_cont">
            <img src="{{ asset('images/harry_potter.jpg') }}" alt="">
          </li>


        </ul>
      </div>
      <div class="bookshelf_bottom">
        <div class="select_text bg_yellow">
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
