<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Chara-Books</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
        <link rel="stylesheet" href="{{ secure_asset('build/assets/app-DQlHjVxY.css') }}">
        <style>
            .register {
                justify-content: space-between;
            }
            .logout button{
                background-color:rgb(255, 127, 191);
            }
            .register_upper {
                display: flex;
                flex-direction: column;
                margin: 16px 0 0 0 ;
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
            .select_yes {
                width: 50%;
                text-align: center;
                font-size: 24px;
                margin: 8px;
                color: #333;
                border:1px #666666 solid;
                border-radius: 16px;
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }
            .select_yes form {
                text-align: center;
                font-size: 24px;
                color: #333;
                border-radius: 16px;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .select_yes button {
                background-color: rgb(255, 127, 191);
                display: inline-block;
                padding: 8px 16px;
                margin: 16px;
                border: none;
                font-size: 16px;
                font-weight: bold;
                color: white;
                text-decoration: none;
                border-radius: 5px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                transition: transform 0.2s, box-shadow 0.2s, background-color 0.2s;
            }
            .select_yes button:hover {
                transform: translateY(-2px) scale(1.05);
                box-shadow: 0 6px 8px rgba(0, 0, 0, 0.15);
            } 
            .title a{
                    background: none;
                    padding: 0;
            }
            .title a:hover{
                cursor:pointer;
            }
            .mini_title{
                padding:8px;
                margin-bottom:0px;
            }
            .home_select_u{
                align-items:center;
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
                <img id="selectedImage" src="" alt="Selected Book Image">
            </div>
            <div class="register_lower">
                <div class="home_select_u">
                    <div class="select_yes bg_red">
                        <form id="bookForm" method="POST" action="{{ route('book.store') }}">
                            @csrf
                            <button type="submit" id="yesButton">はい</button>
                        </form>
                    </div>
                    <div class="select_text bg_yellow">
                        <a href="{{ route('home.search') }}">いいえ</a>
                    </div>
                </div>
            </div>
        </main>
        <footer>&copy; 2024 My portfolio</footer>
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                var selectedImageUrl = sessionStorage.getItem("selectedImageUrl");
                var selectedTitle = sessionStorage.getItem("selectedTitle");

                // 画像を表示する要素のIDを取得し、選択した本の画像のURLを設定
                var selectedImage = document.getElementById("selectedImage");
                selectedImage.src = selectedImageUrl;

                // タイトルを表示する要素のIDを取得し、選択した本のタイトルを設定
                var titleElement = document.getElementById("selectedTitle");
                titleElement.textContent = selectedTitle;

                // セッションストレージから選択したアイコンを取得
                var selectedIcon = sessionStorage.getItem("selectedIcon");
                if (selectedIcon) {
                    var iconContainer = document.getElementById("selectedIconContainer");
                    iconContainer.innerHTML = selectedIcon;
                }

                var bookForm = document.getElementById("bookForm");
                bookForm.addEventListener("submit", function (event) {
                    event.preventDefault(); // デフォルトのフォーム送信をキャンセル
                    sendDataToServer(); // データをサーバーに送信する関数を呼び出す
                });
            });

            function sendDataToServer() {
                var selectedImageUrl = sessionStorage.getItem("selectedImageUrl");
                var selectedTitle = sessionStorage.getItem("selectedTitle");
                var selectedIcon = sessionStorage.getItem("selectedIcon");
                var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

                var formData = new FormData();
                formData.append('selectedIcon', selectedIcon);

                fetch("{{ route('category.store') }}", {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken  // jQueryではなく純粋なJavaScriptで取得
                        // 'Content-Type': 'application/json'                    
                    },
                    // headers: {
                    //     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    //     'Content-Type': 'application/json'
                    // },
                    body: formData
                })
                .then(response => response.json())
                .then(categoryData => {
                    if (categoryData.category_id) {
                        var bookFormData = new FormData();
                        bookFormData.append('selectedImageUrl', selectedImageUrl);
                        bookFormData.append('selectedTitle', selectedTitle);
                        bookFormData.append('categoryId', categoryData.category_id);

                        fetch("{{ route('book.store') }}", {
                            method: 'POST',
                            headers: {
                                'X-CSRF-TOKEN': csrfToken
                            },
                            body: bookFormData
                        })
                        .then(response => {
                            if (response.ok) {
                                console.log('Selected title and image url sent to book.store successfully');
                                window.location.href = "{{ route('home.reading') }}"; // 成功したらリンク先に移動
                            } else {
                                console.error('Failed to send selected title and image url to book.store');
                            }
                        })
                        .catch(error => {
                            console.error('Error while sending selected title and image url to book.store:', error);
                        });
                    } else {
                        console.error('Failed to send selected icon to category.store', error);
                    }
                })
                .catch(error => {
                    console.error('Error while sending selected icon to category.store:', error);
                });
            }
        </script>
    </body>
</html>
