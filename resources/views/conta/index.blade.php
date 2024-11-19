@component("app")
@endcomponent

@php

if(!isset($_SESSION["usuario"]) || $_SESSION["usuario"]->empresa_id != $empresa->id){
    header("location: ../");
    die();
}

@endphp

<h1>Contas de {{ $empresa->nome }}</h1>

@if(count($empresa->contas) > 0)
    <table>
        <thead>
            <th>ID</th>
            <th>Valor</th>
            <th>Descrição</th>
            <th>Tipo de conta</th>
            <th>Data</th>
            <th>Empresa</th>
        </thead>
        <tbody>
            @foreach($empresa->contas as $conta)
                <tr>
                    <td>{{ $conta->id }}</td>
                    <td>{{ $conta->valor }}</td>
                    <td>{{ $conta->descricao }}</td>
                    <td>{{ $conta->tipoConta->descricao }}</td>
                    <td>{{ $conta->data }}</td>
                    <td>{{ $conta->empresa->nome }}</td>
                    <td>
                        <form
                            name="form_delete_{{ $conta->id }}"
                            action="{{ route('contas.destroy', [$empresa->id, $conta->id]) }}"
                            method="post"
                        >
                            @csrf
                            @method("DELETE")
                            <a href="#" onclick="confirmDelete('form_delete_{{ $conta->id }}');">Excluir</a>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <p>Nenhuma conta foi cadastrada.</p>
@endif

<script>
    function confirmDelete(formName){
        if(confirm("Tem certeza que deseja excluir este usuário?"))
            document.forms[formName].submit();
    }
</script>

</body>
</html>
