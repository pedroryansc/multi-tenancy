@component("app")
@endcomponent

<h1>{{ $empresa->nome }}</h1>

@if(isset($_SESSION["usuario"]) && $_SESSION["empresa"]->id == $empresa->id)
    <p><a href="{{route('noticias.create', $empresa->id)}}">Cadastrar nova notícia</a></p>
@endif

@if(count($empresa->noticias) > 0)
    @foreach ($empresa->noticias as $noticia)
        <a class="noticia" href="{{route('noticias.show', [$empresa->id, $noticia->id])}}">
            <div>
                <h2>{{ $noticia->titulo }}</h2>
                <p>{{ $noticia->subtitulo }}</p>
                <h5>{{ $noticia->usuario->nome }} - {{ date_format(date_create($noticia->created_at), "d/m/Y") }}</h5>

                @if(isset($_SESSION["usuario"]) && $_SESSION["empresa"]->id == $empresa->id)
                    <form name="form_delete_{{ $noticia->id }}"
                    action="{{route('noticias.destroy', [$empresa->id, $noticia->id])}}"
                    method="post">
                        @csrf
                        @method("DELETE")
                        <p><a href="#" onclick="confirmDelete('form_delete_{{ $noticia->id }}')">Excluir notícia</a></p>
                    </form>
                @endif
            </div>
        </a>
        <br>
    @endforeach
@else
    <p>Nenhuma notícia foi cadastrada.</p>
@endif

<script>
    function confirmDelete(formName){
        if(confirm("Tem certeza que deseja excluir esta notícia?"))
            document.forms[formName].submit();
    }
</script>

</body>
</html>
