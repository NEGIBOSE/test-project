<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>フォーム</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        <!-- Page Heading -->
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-800 leading-tight">
                    フォーム
                </h2>
            </div>
        </header>

        <!-- Page Content -->
        <main>
            <div class="max-w-7xl mx-auto px-6">
                @if(session('message'))
                    <div class="text-red-600 font-bold">
                        {{ session('message') }}
                    </div>
                @endif
                <form method="post" action="{{ route('post.store') }}">
                @csrf
                    <div class="mt-8">
                        <div class="w-full flex flex-col">
                            <label for="title" class="font-semibold mt-4">件名</label>
                            <input type="text" name="title" class="w-auto py-2 border border-gray-300 round-md" id="title">                    
                        </div>
                    </div>

                    <div class="w-full full flex flex-col">
                        <label for="body" class="font-semibold mt-4">本文</label>
                        <textarea name="body" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="5"></textarea>
                    </div>

                    <button type="submit" class="mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        送信する
                    </button>
                </form>
            </div>
        </main>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            const title = sessionStorage.getItem('title');
            const body = sessionStorage.getItem('body');

            if (title) {
                document.getElementById('title').value = title;
            }

            if (body) {
                document.getElementById('body').value = body;
            }
        });
    </script>
</body>
</html>
