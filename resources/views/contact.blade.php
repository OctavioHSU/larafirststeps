<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>CONTACT</h1>
    <p>{{ $name }}

        @if ($name != 'Octavio')
            Tu nombre no es Octavio
        @else
            <h2>Tu nombre es Octavio</h2>
        @endif

    <ul>
        @foreach ([1, 2, 3, 4, 5] as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>

</body>

</html>
