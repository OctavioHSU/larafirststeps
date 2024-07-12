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

    @if ($errors->any())
        @foreach ($errors->all() as $e)
            <div class="error">
                {{ $e }}
            </div>
        @endforeach
    @endif

    <form action="{{ route('post.store') }}" method="POST">
        @csrf
        <label for="">Título</label>
        <input type="text" name="title">

        <label for="">Slug</label>
        <input type="text" name="slug">

        <label for="">Contenido</label>
        <textarea name="content" cols="30" rows="10"></textarea>

        <label for="">Categoría</label>
        <select name="category_id">
            <option value=""></option>
            @foreach ($categories as $title => $id)
                <option value="{{ $id }}">{{ $title }}</option>
            @endforeach
        </select>

        <label for="">Publicado</label>
        <select name="posted">
            <option value="not">No</option>
            <option value="yes">Si</option>
        </select>

        <label for="">Descripción</label>
        <textarea name="description" cols="30" rows="10"></textarea>

        <button type="submit">Enviar</button>
    </form>

</body>

</html>
