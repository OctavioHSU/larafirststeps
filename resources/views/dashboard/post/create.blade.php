@extends('dashboard.layout')

@section('content')
    <h1>Crear Post</h1>

    @include('dashboard.fragment._errors-form')

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
@endsection
