@extends("app")

@section("body")

<h2>Cadastro de notícia</h2>

<form action="{{route('noticias.store', $empresa)}}" method="post">
    @csrf
    Título: <input type="text" name="titulo" size="75">
    <br><br>
    Subtítulo: <input type="text" name="subtitulo" size="100">
    <br><br>
    Texto: <br>
    <textarea name="texto" style="width: 600px; height: 200px"></textarea>
    <br><br>
    <button type="submit">Publicar</button>
</form>

@endsection
