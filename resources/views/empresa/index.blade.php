@extends("app")

@section("body")

<h2>Empresas:</h2>
@if(count($empresas) > 0)
    <ul>
        @foreach($empresas as $empresa)
            <li><a href="{{route('noticias.index', $empresa->id)}}">{{ $empresa->nome }}</a></li>
        @endforeach
    </ul>
@else
    <p>Nenhuma empresa foi cadastrada.</p>
@endif

@endsection
