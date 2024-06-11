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

</style>
</head>

<body>

    <main class="babyevolute bg_red">
      <div class="mini_title">
        <p id="comment" class="select_text fade-in-comment"></p>
      </div>
      <div class="reading_girl">
      <!-- 対応する画像を表示するためのimg要素 -->
      <img id="imagePlaceholder" src="" alt="">
      </div>
    </main>

    <footer>
        &copy; 2024 My Portfolio
    </footer>

    <!-- JavaScript -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // セッションストレージから選択したSVGを取得
            var selectedIcon = sessionStorage.getItem("selectedIcon");

            // 対応する画像のパス
            var imagePath;

            // セッションストレージから取得したSVGに応じて画像のパスを設定
            if (selectedIcon.includes('#bf7fff')) {
                imagePath = "/images/SF.png"; // SF.pngのパスを指定する

            } else if (selectedIcon.includes('#7fbfff')) {
                imagePath = "/images/NF.png"; // 7fbfffの場合、NF.pngを表示

            } else if (selectedIcon.includes('#ff7fbf')) {
                imagePath = "/images/LOVE.png"; // ff7fbfの場合、LOVE.pngを表示

            } else if (selectedIcon.includes('#FFD43B')) {
                imagePath = "/images/LOUGH.png"; // FFD43Bがある場合、LOUGH.pngを表示

            } else {
                imagePath = "/images/HORROR.png"; // それ以外の場合、HORROR.pngのパスを指定する
            }

            // 対応する画像を表示するためのimg要素
            var imagePlaceholder = document.getElementById("imagePlaceholder");
            imagePlaceholder.src = imagePath;
        });
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
