<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Image Based on SVG</title>
    <style>
        /* 必要に応じてスタイルを追加 */
    </style>
</head>
<body>

    <main>
        <!-- 対応する画像を表示するためのimg要素 -->
        <img id="imagePlaceholder" src="" alt="">
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
</body>
</html>
