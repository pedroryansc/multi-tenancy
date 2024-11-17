@component("app")
@endcomponent

<h1>{{ $noticia->empresa->nome }}</h1>

<h2>{{ $noticia->titulo }}</h2>
<p><strong>{{ $noticia->subtitulo }}</strong></p>

<p>
    por {{ $noticia->usuario->nome }} |
    {{ date_format(date_create($noticia->created_at), "d/m/Y") }} às
    {{ date_format(date_create($noticia->created_at), "H:i") }}
</p>

<hr>

<p>{{$noticia->texto}}</p>

</body>
</html>