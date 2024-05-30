<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chara-Books</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
            <img id="selectedImage" src="" alt="Selected Book Image">
        </div>
        <div class="register_lower">
            <div class="home_select_u">
                <div class="select_text bg_red">
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

    // selectedIcon のみ category.store に保存するデータ
    var categoryData = {
        selectedIcon: selectedIcon
    };

    // selectedTitle と selectedImageUrl を book.store に保存するデータ
    var bookData = {
        selectedTitle: selectedTitle,
        selectedImageUrl: selectedImageUrl
    };

    var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    // category.store へのリクエスト
    fetch("{{ route('category.store') }}", {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrfToken
        },
        body: JSON.stringify(categoryData)
    })
    .then(response => {
        if (response.ok) {
            console.log('Selected icon sent to category.store successfully');
        } else {
            console.error('Failed to send selected icon to category.store');
        }
    })
    .catch(error => {
        console.error('Error while sending selected icon to category.store:', error);
    });

    // book.store へのリクエスト
    fetch("{{ route('book.store') }}", {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrfToken
        },
        body: JSON.stringify(bookData)
    })
    .then(response => {
        if (response.ok) {
            console.log('Selected title and image url sent to book.store successfully');
            //window.location.href = "{{ route('home.reading') }}"; // 成功したらリンク先に移動
        } else {
            console.error('Failed to send selected title and image url to book.store');
        }
    })
    .catch(error => {
        console.error('Error while sending selected title and image url to book.store:', error);
    });
}
    </script>
</body>
</html>
