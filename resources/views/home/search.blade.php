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
      body {
  background: #eed3d9;
}
.search {
  justify-content: space-between;
}
.search_upper {
  width: 100%;
}
.search_select {
  display: flex;
}
.select_register {
  width: 60%;
}
.select_back {
  width: 40%;
  background: #b5c0d0;
}
.reading_search {
  display: flex;
  flex-direction: column;
}
.search_input {
  display: flex;
}
.search_input input {
  width: 72%;
  background: #d9d9d9;
  border: 0px;
  text-align: left;
}
.search_input button {
  width: 28%;
  border: 0;
}
.searchResults {
  height: 24vh;
}
.searchResults ul {
  height: 24vh; /* 例えば高さを200pxに固定 */
  background: #d9d9d9;
  margin: 8px;
  padding: 0 4px;
  overflow-y: auto;
}
.searchResults li {
  border-bottom: 1px solid #333;
  padding: 4px;
  margin: 0 4px;
}
.search_category {
  width: 100%;
  margin: 16px 0;
}

.tabs {
  padding: 0 4px;
}
.tab-content {
  height: 32vh;
  display: none;
  background: #d9d9d9;
}
.tab-content.active {
  display: block;
}

.tab-links li a {
  opacity: 0.4; /* 全てのタブの不透明度を設定 */
}

.tab-links li.active a,
.tab-links li a:hover {
  opacity: 1; /* 選択されたタブとホバー時の不透明度を設定 */
}

.tab-content_big {
  height: 32vh;
  overflow-y: auto;
  padding: 8px 0;
}
.tab-content_big p {
  margin: 0;
}

.tab-content_big li {
  padding: 0 16px;
  margin-bottom: 8px;
}
.category_tab {
  display: flex;
  justify-content: space-between;
}
.category_tab a {
  padding: 0;
}

    </style>

  </head>
  <body>
    <header class="header">
      <div class="title">Chara-Books</div>
    </header>
    <main class="search">
      <div class="search_upper">
        <div class="reading_search">
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
      <div class="search_category">
        <div class="mini_title">
          <p class="select_text">カテゴリ</p>
        </div>
        <div class="tabs">
          <ul class="tab-links category_tab">
            <li>
              <a href="#tab1" class="category-icon" data-category="magic">
                <div class="icon_magic icon">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path
                      fill="#bf7fff"
                      d="M64 416L168.6 180.7c15.3-34.4 40.3-63.5 72-83.7l146.9-94c3-1.9 6.5-2.9 10-2.9C407.7 0 416 8.3 416 18.6v1.6c0 2.6-.5 5.1-1.4 7.5L354.8 176.9c-1.9 4.7-2.8 9.7-2.8 14.7c0 5.5 1.2 11 3.4 16.1L448 416H240.9l11.8-35.4 40.4-13.5c6.5-2.2 10.9-8.3 10.9-15.2s-4.4-13-10.9-15.2l-40.4-13.5-13.5-40.4C237 276.4 230.9 272 224 272s-13 4.4-15.2 10.9l-13.5 40.4-40.4 13.5C148.4 339 144 345.1 144 352s4.4 13 10.9 15.2l40.4 13.5L207.1 416H64zM279.6 141.5c-1.1-3.3-4.1-5.5-7.6-5.5s-6.5 2.2-7.6 5.5l-6.7 20.2-20.2 6.7c-3.3 1.1-5.5 4.1-5.5 7.6s2.2 6.5 5.5 7.6l20.2 6.7 6.7 20.2c1.1 3.3 4.1 5.5 7.6 5.5s6.5-2.2 7.6-5.5l6.7-20.2 20.2-6.7c3.3-1.1 5.5-4.1 5.5-7.6s-2.2-6.5-5.5-7.6l-20.2-6.7-6.7-20.2zM32 448H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32z"
                    />
                  </svg>
                </div>
              </a>
            </li>
            <li>
              <a href="#tab2" class="category-icon" data-category="human">
                <div class="icon_human icon">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path
                      fill="#7fbfff"
                      d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM176.4 176a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm128 32a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zM160 336H352c8.8 0 16 7.2 16 16s-7.2 16-16 16H160c-8.8 0-16-7.2-16-16s7.2-16 16-16z"
                    />
                  </svg>
                </div>
              </a>
            </li>
            <li>
              <a href="#tab3" class="category-icon" data-category="love">
                <div class="icon_love icon">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path
                      fill="#ff7fbf"
                      d="M498 339.7c9.1-26.2 14-54.4 14-83.7C512 114.6 397.4 0 256 0S0 114.6 0 256S114.6 512 256 512c35.4 0 69.1-7.2 99.7-20.2c-4.8-5.5-8.5-12.2-10.4-19.7l-22.9-89.3c-10-39 11.8-80.9 51.8-92.1c37.2-10.4 73.8 10.1 87.5 44c12.7-1.6 25.1 .4 36.2 5zM296 332c0 6.9-3.1 13.2-7.3 18.3c-4.3 5.2-10.1 9.7-16.7 13.4c-2.7 1.5-5.7 3-8.7 4.3c3.1 1.3 6 2.7 8.7 4.3c6.6 3.7 12.5 8.2 16.7 13.4c4.3 5.1 7.3 11.4 7.3 18.3s-3.1 13.2-7.3 18.3c-4.3 5.2-10.1 9.7-16.7 13.4C258.7 443.1 241.4 448 224 448c-3.6 0-6.8-2.5-7.7-6s.6-7.2 3.8-9l0 0 0 0 0 0 0 0 .2-.1c.2-.1 .5-.3 .9-.5c.8-.5 2-1.2 3.4-2.1c2.8-1.9 6.5-4.5 10.2-7.6c3.7-3.1 7.2-6.6 9.6-10.1c2.5-3.5 3.5-6.4 3.5-8.6s-1-5-3.5-8.6c-2.5-3.5-5.9-6.9-9.6-10.1c-3.7-3.1-7.4-5.7-10.2-7.6c-1.4-.9-2.6-1.6-3.4-2.1l-.6-.4-.3-.2-.2-.1 0 0 0 0 0 0c-2.5-1.4-4.1-4.1-4.1-7s1.6-5.6 4.1-7l0 0 0 0 0 0 0 0 0 0 .2-.1c.2-.1 .5-.3 .9-.5c.8-.5 2-1.2 3.4-2.1c2.8-1.9 6.5-4.5 10.2-7.6c3.7-3.1 7.2-6.6 9.6-10.1c2.5-3.5 3.5-6.4 3.5-8.6s-1-5-3.5-8.6c-2.5-3.5-5.9-6.9-9.6-10.1c-3.7-3.1-7.4-5.7-10.2-7.6c-1.4-.9-2.6-1.6-3.4-2.1c-.4-.2-.7-.4-.9-.5l-.2-.1 0 0 0 0 0 0c-3.2-1.8-4.7-5.5-3.8-9s4.1-6 7.7-6c17.4 0 34.7 4.9 47.9 12.3c6.6 3.7 12.5 8.2 16.7 13.4c4.3 5.1 7.3 11.4 7.3 18.3zM176.4 176a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm194.8 57.6c-17.6-23.5-52.8-23.5-70.4 0c-5.3 7.1-15.3 8.5-22.4 3.2s-8.5-15.3-3.2-22.4c30.4-40.5 91.2-40.5 121.6 0c5.3 7.1 3.9 17.1-3.2 22.4s-17.1 3.9-22.4-3.2zM434 352.3c-6-23.2-28.8-37-51.1-30.8s-35.4 30.1-29.5 53.4l22.9 89.3c2.2 8.7 11.2 13.9 19.8 11.4l84.9-23.8c22.2-6.2 35.4-30.1 29.5-53.4s-28.8-37-51.1-30.8l-20.2 5.6-5.4-21z"
                    />
                  </svg>
                </div>
              </a>
            </li>
            <li>
              <a href="#tab4" class="category-icon" data-category="comedy">
                <div class="icon_laugh icon">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path
                      fill="#FFD43B"
                      d="M426.8 14.2C446-5 477.5-4.6 497.1 14.9s20 51 .7 70.3c-6.8 6.8-21.4 12.4-37.4 16.7c-16.3 4.4-34.1 7.5-46.3 9.3c-1.6 .2-3.1 .5-4.6 .6c-5.6 .9-10.3-3.9-9.5-9.5c1.6-11.2 4.6-29.6 9-47c.3-1.3 .7-2.6 1-3.9c4.3-15.9 9.8-30.5 16.7-37.4zm-44.7 19c-1.5 4.8-2.9 9.6-4.1 14.3c-4.8 18.9-8 38.5-9.7 50.3c-4 26.8 18.9 49.7 45.7 45.8c11.9-1.6 31.5-4.8 50.4-9.7c4.7-1.2 9.5-2.5 14.3-4.1C534.2 227.5 520.2 353.8 437 437c-83.2 83.2-209.5 97.2-307.2 41.8c1.5-4.8 2.8-9.6 4-14.3c4.8-18.9 8-38.5 9.7-50.3c4-26.8-18.9-49.7-45.7-45.8c-11.9 1.6-31.5 4.8-50.4 9.7c-4.7 1.2-9.5 2.5-14.3 4.1C-22.2 284.5-8.2 158.2 75 75C158.2-8.3 284.5-22.2 382.2 33.2zM51.5 410.1c18.5-5 38.8-8.3 50.9-10c5.6-.9 10.3 3.9 9.5 9.5c-1.7 12.1-5 32.4-10 50.9C97.6 476.4 92 491 85.2 497.8C66 517 34.5 516.6 14.9 497.1s-20-51-.7-70.3c6.8-6.8 21.4-12.4 37.4-16.7zM416.4 202.3c-4.8-11.9-20.9-10.9-26.9 .4c-19.4 36.7-46.3 73.2-79.8 106.7s-70 60.3-106.7 79.8c-11.3 6-12.3 22.1-.4 26.9c59.4 24.1 129.9 12.2 177.9-35.8s59.9-118.5 35.8-177.9zM87.1 285.1c2 2 4.6 3.2 7.3 3.4l56.1 5.1 5.1 56.1c.3 2.8 1.5 5.4 3.4 7.3c6.3 6.3 17.2 3.6 19.8-4.9l29.7-97.4c3.5-11.6-7.3-22.5-19-19L92 265.3c-8.6 2.6-11.3 13.4-4.9 19.8zM265.3 92l-29.7 97.4c-3.5 11.6 7.3 22.5 19 19l97.4-29.7c8.6-2.6 11.3-13.4 4.9-19.8c-2-2-4.6-3.2-7.3-3.4l-56.1-5.1-5.1-56.1c-.3-2.8-1.5-5.4-3.4-7.3c-6.3-6.3-17.2-3.6-19.8 4.9z"
                    />
                  </svg>
                </div>
              </a>
            </li>
            <li>
              <a href="#tab5" class="category-icon" data-category="horror">
                <div class="icon_magic icon">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path
                      d="M416 398.9c58.5-41.1 96-104.1 96-174.9C512 100.3 397.4 0 256 0S0 100.3 0 224c0 70.7 37.5 133.8 96 174.9c0 .4 0 .7 0 1.1v64c0 26.5 21.5 48 48 48h48V464c0-8.8 7.2-16 16-16s16 7.2 16 16v48h64V464c0-8.8 7.2-16 16-16s16 7.2 16 16v48h48c26.5 0 48-21.5 48-48V400c0-.4 0-.7 0-1.1zM96 256a64 64 0 1 1 128 0A64 64 0 1 1 96 256zm256-64a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"
                    />
                  </svg>
                </div>
              </a>
            </li>
          </ul>

          <div class="tab-content" id="tab1">
            <ul class="tab-content_big">
              <li>
                <p>SF(サイエンスフィクション)</p>
                <ul class="tab-content_small">
                  <li>ハードSF</li>
                  <li>ソフトSF</li>
                  <li>スペースオペラ</li>
                </ul>
              </li>
              <li>
                <p>ファンタジー</p>
                <ul class="tab-content_small">
                  <li>ハイファンタジー</li>
                  <li>ローファンタジー</li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="tab-content" id="tab2">
            <ul class="tab-content_big">
              <li>
                <p>ノンフィクション</p>
                <ul class="tab-content_small">
                  <li>自己啓発</li>
                  <li>ビジネス</li>
                  <li>科学</li>
                  <li>歴史</li>
                  <li>自伝</li>
                  <li>自然</li>
                  <li>プログラミング</li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="tab-content" id="tab3">
            <ul class="tab-content_big">
              <li>
                <p>ロマンス</p>
                <ul class="tab-content_small">
                  <li>歴史ロマンス</li>
                  <li>ファンタジーロマンス</li>
                </ul>
              </li>
              <li>
                <p>ドラマ</p>
                <ul class="tab-content_small">
                  <li>家族ドラマ</li>
                  <li>社会派ドラマ</li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="tab-content" id="tab4">
            <ul class="tab-content_big">
              <li>
                <p>コメディ</p>
                <ul class="tab-content_small">
                  <li>ハートフルコメディ</li>
                  <li>ブラックコメディ</li>
                </ul>
              </li>
              <li>
                <p>ユーモア</p>
                <ul class="tab-content_small">
                  <li>お笑い</li>
                  <li>ロマンティックユーモア</li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="tab-content" id="tab5">
            <ul class="tab-content_big">
              <li>
                <p>ミステリー</p>
                <ul class="tab-content_small">
                  <li>推理小説</li>
                  <li>スリラー</li>
                  <li>ノワール</li>
                </ul>
              </li>
              <li>
                <p>サスペンス</p>
                <ul class="tab-content_small">
                  <li>サスペンス小説</li>
                </ul>
              </li>
              <li>
                <p>ホラー</p>
                <ul class="tab-content_small">
                  <li>ゴシックホラー</li>
                  <li>サイコホラー</li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="search_bottom">
        <div class="search_select">
          <div class="select_text select_back">
            <a href="{{ route('home.index') }}">HOME</a>
          </div>
          <div class="select_text select_register bg_red">
            <a href="{{ route('home.registerbook') }}">この本にする</a>
          </div>
        </div>
      </div>
    </main>
    <footer>&copy; 2024 My portfolio</footer>
    <!-- JavaScriptファイルの読み込み -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
      // 選択された本の画像URLを保持する変数
let selectedImageUrl;

// 書籍を検索する関数
function searchBooks() {
  const searchTerm = document.getElementById("searchTerm").value;
  const url = "https://www.googleapis.com/books/v1/volumes?q=" + searchTerm; // Google Books APIを使用

  fetch(url)
    .then((response) => response.json())
    .then((data) => {
      const results = data.items; // 検索結果を results 変数に設定する
      displayResults(results); // displayResults 関数を呼び出して結果を表示する
    })
    .catch((error) => console.error("Error:", error));
}

// 書籍の検索結果を表示する関数
function displayResults(results) {
  const container = document.getElementById("searchResults");
  container.innerHTML = ""; // 検索結果をクリア

  if (results && results.length > 0) {
    const ul = document.createElement("ul");
    for (let i = 0; i < results.length; i++) {
      const volumeInfo = results[i].volumeInfo;
      const title = volumeInfo.title;
      const authors = volumeInfo.authors
        ? volumeInfo.authors.join(", ")
        : "不明";
      const year = volumeInfo.publishedDate
        ? volumeInfo.publishedDate.substr(0, 4)
        : "不明";
      const thumbnail = volumeInfo.imageLinks
        ? volumeInfo.imageLinks.thumbnail
        : "";

      const li = document.createElement("li");
      li.style.display = "flex"; // リストアイテムをフレックスボックスに設定
      li.style.alignItems = "center"; // アイテムを中央に配置

      // サムネイル画像を表示
      const img = document.createElement("img");
      img.src = thumbnail;
      img.style.marginRight = "10px"; // 画像の右側に余白を設定
      li.appendChild(img);

      // タイトルと著者と年のテキストを追加
      const text = document.createTextNode(
        title + " /著 " + authors + " / " + year + "年"
      );
      li.appendChild(text);

      // クリックイベントのハンドラをラップしてthumbnailを渡す
      li.addEventListener("click", createClickHandler(thumbnail, title));

      ul.appendChild(li);
    }
    container.appendChild(ul);
  } else {
    container.innerHTML = "<p>No results found</p>";
  }
}

// クリックイベントのハンドラを作成する関数
function createClickHandler(thumbnail, title) {
  return function () {
    const selectedTitle = title; // タイトルを取得
    document.getElementById("searchTerm").value = selectedTitle;
    // 選択されたタイトルを検索ボックスに自動で入れる
    selectedImageUrl = thumbnail; // 選択された本の画像URLを保持する
    sessionStorage.setItem("selectedTitle", selectedTitle); // タイトルをセッションストレージに保存
    sessionStorage.setItem("selectedImageUrl", selectedImageUrl); // 画像URLをセッションストレージに保存
    // ページ遷移せずに画像URLをregister.htmlに表示させる
    const registerImage = document.getElementById("registerImage");
    registerImage.src = selectedImageUrl;
    // reading.htmlにも画像URLを引き渡す
    const readingImage = document.getElementById("readingImage");
    readingImage.src = selectedImageUrl;

    // サーバーにデータを送信
    sendDataToServer(selectedImageUrl, selectedTitle);
  };
}

// タブの作成
document.addEventListener("DOMContentLoaded", function () {
  // タブのリンクを取得
  var tabLinks = document.querySelectorAll(".tab-links li a");

  // タブのコンテンツを取得
  var tabContents = document.querySelectorAll(".tab-content");

  // タブリンクにイベントリスナーを追加
  tabLinks.forEach(function (tabLink) {
    tabLink.addEventListener("click", function (event) {
      event.preventDefault(); // デフォルトのリンク動作を無効化

      // タブの表示を切り替える
      var targetTabId = this.getAttribute("href").substring(1);
      tabContents.forEach(function (tabContent) {
        if (tabContent.id === targetTabId) {
          tabContent.classList.add("active");
        } else {
          tabContent.classList.remove("active");
        }
      });

      // タブの選択状態を切り替える
      tabLinks.forEach(function (link) {
        link.classList.remove("active");
      });
      this.classList.add("active");
    });
  });
});

// カテゴリーを処理する関数
function processCategory(category) {
  switch (category) {
    case "magic":
      return "SFを選択しました";
    case "human":
      return "ノンフィクションを選択しました";
    case "love":
      return "ラブを選択しました";
    case "comedy":
      return "コメディを選択しました";
    case "horror":
      return "ホラーを選択しました";
    default:
      return "選択されませんでした";
  }
}

// ページの読み込みが完了したときに実行
document.addEventListener("DOMContentLoaded", function () {
  // カテゴリーアイコンの要素を取得
  var categoryIcons = document.querySelectorAll(".category-icon");

  // 各カテゴリーアイコンがクリックされたときのイベントリスナーを追加
  categoryIcons.forEach(function (icon) {
    icon.addEventListener("click", function (event) {
      // デフォルトの動作を無効化
      event.preventDefault();

      // 関連するカテゴリーを取得
      var category = this.getAttribute("data-category");

      // クリックされたアイコンのSVG要素の内容を取得してセッションストレージに保存
      var svgContent = this.querySelector("svg").outerHTML;
      sessionStorage.setItem("selectedIcon", svgContent);

      // 選択されたカテゴリーを処理する関数を呼び出し、結果をalertで表示する
      alert(processCategory(category));
    });
  });
});

    </script>
    <script
      defer
      src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"
    ></script>
  </body>
</html>
