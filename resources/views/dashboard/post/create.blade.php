<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Post</title>
</head>

<body>
    <h1>Crear Post</h1>
    <form action="{{ route('post.store') }}" method="POST">
        @csrf
        <label for="">Título</label>
        <input type="text" name="title">

        <label for="">Slug</label>
        <input type="text" name="slug">

        <label for="">Contenido</label>
        <textarea name="content" cols="30" rows="10"></textarea>

        <label for="">Descripción</label>
        <textarea name="description" cols="30" rows="10"></textarea>

        <button type="submit">Enviar</button>
    </form>

</body>

</html>
