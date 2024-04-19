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
    .register {
  justify-content: space-between;
}
.register_upper {
  display: flex;
  flex-direction: column;
}
.register_upper .icon {
  margin: 0 auto;
  background: none;
}
#selectedTitle {
  font-size: 16px;
}
.register_middle {
  display: flex;
  justify-content: center;
}
.register_middle img {
  height: 360px;
  width: auto;
}

 </style>
</head>
  <body>
    <header class="header bg_red">
      <div class="title">Chara-Books</div>
    </header>
    <main class="register bg_red">
      <div class="register_upper">
        <div class="mini_title">
          <p class="select_text">この本を読み聞かせますか？</p>
        </div>
        <!-- アイコンの呼び出し -->
        <div class="icon">
          <div id="selectedIconContainer"></div>
        </div>
        <div class="mini_title">
          <p id="selectedTitle" class="select_text">本のタイトル</p>
        </div>
      </div>
      <!-- 画像の呼び出し -->
      <div class="register_middle">
        <img id="selectedImage" src="" alt="Selected Book Image" />
      </div>
      <div class="register_lower">
        <div class="home_select_u">
          <div class="select_text bg_red">
          <a href="{{ route('home.reading') }}">はい</a>
          </div>
          <div class="select_text bg_yellow">
          <a href="{{ route('home.search') }}">いいえ</a>
          </div>
        </div>
      </div>
    </main>
    <footer>&copy; 2024 My portfolio</footer>
    <!-- JavaScriptファイルの読み込み -->
    <script src="assets/js/register.js"></script>
    <script
      defer
      src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"
    ></script>
    <script>
        // セッションストレージから選択した本の画像の URL とタイトルを取得
var selectedImageUrl = sessionStorage.getItem("selectedImageUrl");
var selectedTitle = sessionStorage.getItem("selectedTitle");

// 画像を表示する要素のIDを取得し、選択した本の画像のURLを設定
var selectedImage = document.getElementById("selectedImage");
selectedImage.src = selectedImageUrl;

// タイトルを表示する要素のIDを取得し、選択した本のタイトルを設定
var titleElement = document.getElementById("selectedTitle");
titleElement.textContent = selectedTitle;

document.addEventListener("DOMContentLoaded", function () {
  // セッションストレージから選択したアイコンを取得
  var selectedIcon = sessionStorage.getItem("selectedIcon");
  if (selectedIcon) {
    // アイコンを表示する要素を取得
    var iconContainer = document.getElementById("selectedIconContainer");
    console.log(iconContainer); // iconContainerが正しく取得されていることを確認

    // セッションストレージから保存されたSVGの内容を取得して表示する
    iconContainer.innerHTML = selectedIcon;
  }
});

    </script>
  </body>
</html>
