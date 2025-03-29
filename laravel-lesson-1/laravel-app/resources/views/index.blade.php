<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('style.css') }}">
    <title>My Laravel App</title>
</head>
<body>
    <div class="container">
        <h1>Posts</h1>
        <ul>
            @forelse ($posts as $post)
            <li>{{ $post }}</li>
            @empty
            <li>No Posts!</li>
            @endforelse
        </ul>
    </div>
</body>
</html>
