<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>一覧表示</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        <!-- Page Heading -->
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-800 leading-tight">
                    一覧表示
                </h2>
            </div>
        </header>

        <!-- Page Content -->
        <main>
            <div class="mx-auto px-6">
                @foreach($posts as $post)
                <div class="mt-4 p-8 bg-white w full round-2xl">
                    <h1 class="p-4 text-lg font-semibold">
                        {{$post->title}}
                    </h1>
                    <hr class="w-full">
                    <p class="mt-4 p-4">
                        {{$post->body}}
                    </p>
                    <div class="p-4 text-sm font-semibold">
                        <p>
                            {{$post->created_at}}
                        </p>
                    </div>
                </div>
                @endforeach
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
