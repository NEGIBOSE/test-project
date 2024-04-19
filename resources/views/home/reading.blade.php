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
    .reading {
  position: relative;
}
#comment {
  display: none; /* 初期状態では非表示に設定 */
}
.reading .mini_title {
  margin-top: 24%;
}
.reading .mini_title p {
  background: none;
}
/* コメントが徐々に現れるアニメーションの定義 */
@keyframes fadeIn {
  0% {
    opacity: 0; /* 開始時の透明度 */
  }
  100% {
    opacity: 1; /* 終了時の透明度 */
  }
}

/* アニメーションを適用する要素 */
.fade-in-comment {
  animation: fadeIn 1s ease-in; /* アニメーションを1秒かけて実行（イージングを使用） */
}

.reading_girl {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 92%;
}
.reading_girl img {
  width: 100%;
}
.reading_bookimg {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

/* 回転と縮小アニメーションの定義 */
@keyframes rotateAndShrink {
  0% {
    transform: rotate(0deg) scale(1); /* 開始時の回転角度とサイズ */
  }
  90% {
    transform: rotate(360deg) scale(0.1); /* 縮小 */
  }
  100% {
    transform: rotate(360deg) scale(0); /* 終了時の回転角度とサイズ */
    visibility: hidden;
  }
}

/* アニメーションを適用する要素 */
.rotating-shrinking-image {
  animation: rotateAndShrink 2s linear; /* アニメーションを2秒かけて実行。無限に繰り返す場合 infinitを追記 */
}

</style>
</head>
  <body>
    <header class="header bg_red">
      <div class="title">Chara-Books</div>
    </header>
    <main class="reading bg_red">
      <div class="mini_title">
        <p id="comment" class="select_text fade-in-comment"></p>
      </div>
      <div class="reading_girl">
      <img id="myImage" src="" alt="Image" />
      </div>

      <!-- 本画像 -->
      <div class="reading_bookimg">
        <img
          id="selectedImage"
          class="rotating-shrinking-image"
          src=""
          alt="Selected Book Image"
        />
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
    <script>
        // セッションストレージから選択した本の画像の URL を取得
var selectedImageUrl = sessionStorage.getItem("selectedImageUrl");

// 画像を表示する要素のIDを取得し、選択した本の画像のURLを設定
var selectedImage = document.getElementById("selectedImage");
selectedImage.src = selectedImageUrl;

// アニメーションが終了した後に要素を非表示にする関数
function hideElementAfterAnimation() {
  var rotatingShrinkingImage = document.querySelector(
    ".rotating-shrinking-image"
  );
  rotatingShrinkingImage.style.visibility = "hidden"; // 要素を非表示にする
}

// アニメーションが終了したら要素を非表示にするイベントリスナーを追加
document.addEventListener("DOMContentLoaded", function () {
  var rotatingShrinkingImage = document.querySelector(
    ".rotating-shrinking-image"
  );
  rotatingShrinkingImage.addEventListener(
    "animationend",
    hideElementAfterAnimation
  );
});

// ページの読み込みが完了したときに実行
document.addEventListener("DOMContentLoaded", function () {
  // 5秒後にコメントを表示する
  setTimeout(function () {
    var commentElement = document.getElementById("comment");
    commentElement.style.display = "block"; // コメントを表示
  }, 4000); // 4000ミリ秒（4秒）後に実行
});

document.addEventListener("DOMContentLoaded", function () {
  // ランダムなコメントの配列
  const comments = [
    "うれしそうだ",
    "よろこんでいる",
    "はしゃいでいる",
    "こんな本があったなんて...",
    "す、すっげぇ",
  ];

  // ランダムなコメントを選択
  const randomIndex = Math.floor(Math.random() * comments.length);
  const randomComment = comments[randomIndex];

  // ランダムなコメントを表示
  document.getElementById("comment").textContent = randomComment;
});

// ページの読み込みが完了したときに実行
document.addEventListener("DOMContentLoaded", function () {
  // 7秒後にindex.htmlに遷移する関数
  function redirectToNextPage() {
    window.location.href = "{{ route('home.index') }}"; // 次のページへの遷移
  }

  // 7秒後にredirectToNextPage関数を実行
  setTimeout(redirectToNextPage, 7000); // ミリ秒単位で指定するため、7000ミリ秒＝7秒
});

    </script>
  </body>
</html>
