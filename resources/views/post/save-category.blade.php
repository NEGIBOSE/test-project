<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Save Category</title>
</head>
<body>
    <h1>Save Category</h1>

    <form method="POST" action="{{ route('category.store') }}">
        @csrf
        <div>
            <label for="mark">mark:</label>
            <input type="text" id="mark" name="mark">
        </div>
        <button type="submit">Save</button>
    </form>
</body>
</html>
