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
      <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
      <style>
        .logout button{
          background-color:#FFE600;
        }
        .search_input {
          display: flex;
          margin-top:16px;
        }
        .search_input input {
          width: 70%;
        }
        .search_input button {
          width: 30%;
        }
        .bookshelf_middle {
          width: 97%;
          margin: 0 auto;
          padding: 8px;
          height: 100vh;
          overflow: auto;
          border-radius:8px;
        }
        .bookshelf_search select{
          margin:8px 16px;
        }
        .bookshelf_contents {
          display: flex;
          flex-wrap: wrap;
        }
        .bookshelf_cont {
          width: calc(33.33% - 10px);
          margin: 5px;
          box-sizing: border-box;
        }
        .bookshelf_bottom {
          width: 100%;
        }
        .select_text {
          width: auto;
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
    <header class="header bg_yellow">
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
    <main class="bookshelf bg_yellow">
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
          <div>
            <select id="sortOrder" onchange="searchBooks()">
              <option value="oldest">古い順</option>
              <option value="latest">新しい順</option>
              <option value="name">名前順</option>
            </select>
          </div>
          <div id="searchResults" class="searchResults">
            <!-- 検索結果がここに表示されます -->
          </div>
        </div>
      </div>
      <div class="bookshelf_middle bg_gray">
        <ul class="bookshelf_contents" id="bookshelfContents">
          @foreach($books as $book)
            <li class="bookshelf_cont">
              <img src="{{ $book->thumbnail_url }}" alt="{{ $book->title }}">
              <p>{{ $book->title }}</p>
            </li>
          @endforeach
        </ul>
      </div>
      <div class="bookshelf_bottom">
        <div class="select_text bg_yellow">
              <a href="{{ route('home.index') }}">HOMEへ戻る</a>
        </div>
      </div>
    </main>
    <footer>&copy; 2024 My portfolio</footer>
    <script
      defer
      src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"
    ></script>
    <script>
      function searchBooks() {
        const searchTerm = document.getElementById('searchTerm').value;
        const sortOrder = document.getElementById('sortOrder').value;
        fetch(`{{ route('books.search') }}?query=${searchTerm}&sort=${sortOrder}`)
          .then(response => response.json())
          .then(data => {
            const bookshelfContents = document.getElementById('bookshelfContents');
            bookshelfContents.innerHTML = '';
            data.forEach(book => {
              const bookItem = document.createElement('li');
              bookItem.classList.add('bookshelf_cont');
              bookItem.innerHTML = `
                <img src="${book.thumbnail_url}" alt="${book.title}">
                <p>${book.title}</p>
              `;
              bookshelfContents.appendChild(bookItem);
            });
          })
          .catch(error => console.error('Error:', error));
      }
    </script>
  </body>
</html>
