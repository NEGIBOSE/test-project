<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Chara-Booksa</title>

        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet" />

        <!-- CSSファイルの読み込み -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
        <link rel="stylesheet" href="{{ secure_asset('build/assets/app-DQlHjVxY.css') }}">
        <style>
            .logout button{
                background-color:rgb(255, 127, 191);
            }
            .reading {
                position: relative;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                height: 100vh; /* 画面全体の高さ */
            }
            .mini_title {
                margin-top: 10px;
            }
            .mini_title p {
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
            @keyframes fadeOut {
                0% {
                    opacity: 1; /* 開始時の透明度 */
                }
                100% {
                    opacity: 0; /* 終了時の透明度 */
                }
            }
            /* アニメーションを適用する要素 */
            .fade-in-comment {
                animation: fadeIn 1s ease-in; /* アニメーションを1秒かけて実行（イージングを使用） */
            }
            .fade-out-comment {
                animation: fadeOut 1s ease-in; /* アニメーションを1秒かけて実行（イージングを使用） */
            }
            .reading_girl {
                position: relative; /* 相対配置コンテキストを設定 */
                width: 92%;
                text-align: center;
                margin-top: -16px; /* 上方に16px移動 */
                border-radius: 16px;
                overflow: hidden;
                border:1px #fff solid;
            }

            .reading_girl img {
                width: 100%;
                transition: opacity 0.5s ease-in-out; /* 画像の切り替えにフェードアニメーションを追加 */
            }
            .visible {
                opacity: 1;
            }
            .hidden {
                opacity: 0;
            }
            /* 切り替え時のフェード効果 */
            @keyframes fadeInOut {
                0% {
                    opacity: 0;
                }
                50% {
                    opacity: 0.5;
                }
                100% {
                    opacity: 0;
                }
            }
            .fade-in-out {
                animation: fadeInOut 1s linear infinite; /* 1秒ごとにフェードイン・フェードアウトを繰り返す */
            }
            /* 初期画像の最後の1秒間に白いモヤをかけるためのアニメーション */
            @keyframes whiteMist {
                0% {
                    opacity: 0;
                }
                90% {
                    opacity: 0;
                }
                100% {
                    opacity: 1;
                }
            }
            .white-mist {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: white;
                opacity: 0;
                animation: whiteMist 1s 9s linear forwards; /* 9秒後から1秒間かけて白モヤを表示 */
            }
            /* 新しいテキストスタイル */
            .text-container {
                text-align: center;
                position: absolute; /* absolute に設定 */
                top: 16%; /* reading_girl の上方に16px配置 */
                width: 100%;
            }
            .text-container p {
                font-size: 2rem;
                color: black;
                margin: 0;
                opacity: 0;
                position: absolute;
                width: 100%;
                text-align: center;
            }
            .fade-in {
                animation: fadeIn 1s forwards;
            }
            .fade-out {
                animation: fadeOut 1s forwards;
            }
        
            .title a{
                background: none;
                padding: 0;
            }
            .title a:hover{
                cursor:pointer;
            }
        </style>
    </head>
    <body>
        <header class="header bg_red">
            <div class="title">
                <a href="{{ route('home.index') }}">
                    <img src="/images/chara_logo.png" alt="png Image">
                </a>
            </div>
            <div class="logout">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" height="36px" viewBox="0 -960 960 960" width="36px"><path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h280v80H200v560h280v80H200Zm440-160-55-58 102-102H360v-80h327L585-622l55-58 200 200-200 200Z"/></svg>
                        
                    </button>
                </form>
            </div>
        </header>
        <main class="babyevolute bg_red reading">
            <div class="text-container">
                <p id="text1">おやおや？</p>
                <p id="text2">成長した！</p>
            </div>
            <div class="reading_girl">
                <!-- 対応する画像を表示するためのimg要素 -->
                <img id="imagePlaceholder" src="/images/BABY.png" alt="BABY Image" class="visible">
                <!-- 初期画像の最後の1秒間に白いモヤをかける要素 -->
                <!-- <div class="white-mist"></div> -->
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

                // 初期画像の表示時間
                setTimeout(function () {
                    // 画像を切り替える関数
                    function blinkImage() {
                        // 初期画像を非表示に
                        imagePlaceholder.classList.remove("visible");
                        imagePlaceholder.classList.add("hidden");

                        // 切り替え後の画像を表示
                        setTimeout(function () {
                            imagePlaceholder.src = imagePath;
                            imagePlaceholder.classList.remove("hidden");
                            imagePlaceholder.classList.add("visible");
                        }, 500); // 0.5秒後に切り替え

                        // 10回交互に表示する処理
                        var count = 0;
                        var interval = setInterval(function () {
                            count++;
                            // 交互に切り替え
                            if (count % 2 === 0) {
                                imagePlaceholder.src = "/images/BABY.png"; // 初期画像
                            } else {
                                imagePlaceholder.src = imagePath; // 後半画像
                            }
                            // 10回切り替えたら停止
                            if (count === 15) {
                                clearInterval(interval);
                                // 最終的に後半画像を表示する
                                imagePlaceholder.src = imagePath;
                                // 切り替え中のフェード効果を解除
                                imagePlaceholder.classList.remove("fade-in-out");
                            } else {
                                // 切り替え中のフェード効果を適用
                                imagePlaceholder.classList.add("fade-in-out");
                            }
                        }, 500); // 0.5秒ごとに実行
                    }

                    // 初期画像の表示を開始
                    blinkImage();
                }, 3000); // 3秒後に初期画像の表示を開始

                // テキストの表示と非表示のタイミングを設定
                setTimeout(function () {
                    document.getElementById('text1').classList.add('fade-in');
                }, 3000); // 3秒後に「おやおや？」をフェードイン

                setTimeout(function () {
                    document.getElementById('text1').classList.add('fade-out');
                }, 7000); // 7秒後に「おやおや？」をフェードアウト

                setTimeout(function () {
                    document.getElementById('text2').classList.add('fade-in');
                }, 11000); // 11秒後に「進化した！」をフェードイン

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
                
                // 14秒後にhome.indexに自動で移動する
                setTimeout(function() {
                    window.location.href = "{{ route('home.index') }}"; // リダイレクト先のURLを指定する
                }, 14000); // 14秒後にリダイレクトする
            });
        </script>

        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    </body>
</html>
