@extends("app")

@section("body")

<style>
    .noticia{
        color: black;
        text-decoration: none;
    }
    div{
        border: 1px solid black;
        padding-left: 15px;
    }
</style>

<h1>{{ $empresa->nome }}</h1>

<p><a href="{{route('noticias.create', $empresa->id)}}">Cadastrar nova notícia</a></p>

@if(count($empresa->noticias) > 0)
    @foreach ($empresa->noticias as $noticia)
        <a class="noticia" href="{{route('noticias.show', [$empresa->id, $noticia->id])}}">
            <div>
                <h2>{{ $noticia->titulo }}</h2>
                <p>{{ $noticia->subtitulo }}</p>
                <h5>{{ $noticia->usuario->nome }} - {{ date_format(date_create($noticia->created_at), "d/m/Y") }}</h5>
            </div>
        </a>
        <br>
    @endforeach
@else
    <p>Nenhuma notícia foi cadastrada.</p>
@endif

@endsection
