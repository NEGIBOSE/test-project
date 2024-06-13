<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Save Image</title>
</head>
<body>
    <h1>Save Image</h1>

    <form method="POST" action="{{ route('Image.store') }}">
        @csrf
        <div>
            <label for="image">image:</label>
            <input type="text" id="image" name="image">
        </div>
        <button type="submit">Save</button>
    </form>
</body>
</html>
