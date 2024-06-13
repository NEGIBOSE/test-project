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

    // Send the image URL to the backend
    fetch('/post/save-image', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}' // Include CSRF token for security
        },
        body: JSON.stringify({ image_url: imagePath })
    })
    .then(response => response.json())
    .then(data => {
        console.log('Image URL stored successfully:', data);
    })
    .catch((error) => {
        console.error('Error storing image URL:', error);
    });
});

    </script>

    <script
      defer
      src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"
    ></script>
</body>
</html>
