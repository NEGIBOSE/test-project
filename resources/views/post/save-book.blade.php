<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Save Book</title>
</head>
<body>
    <h1>Save Book</h1>

    <form method="POST" action="{{ route('book.store') }}">
        @csrf
        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title">
        </div>
        <div>
            <label for="thumbnail_url">Thumbnail URL:</label>
            <input type="text" id="thumbnail_url" name="thumbnail_url">
        </div>
        <button type="submit">Save</button>
    </form>
</body>
</html>
