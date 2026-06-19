<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>This is the header</h1>
    <span>{{ $title }}</span>
    <ul>
        @forelse ( $names as $name )
            <li>{{ $name }}</li>
        @empty
            <li>No names available.</li>
        @endforelse
</body>
</html>