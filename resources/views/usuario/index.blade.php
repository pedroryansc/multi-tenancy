@component("app")
@endcomponent

@php

if(!isset($_SESSION["usuario"]) || $_SESSION["tipo_usuario_id"] != 1){
    header('location: ../');
    die();
}

@endphp

<h2>Usuários</h2>

@if(count($usuarios) > 0)
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Nome de usuário</th>
                <th>Senha</th>
                <th>Tipo de usuário/Empresa</th>
            </tr>
        </thead>
        <tbody>
            @foreach($usuarios as $usuario)
                <tr>
                    <td>{{ $usuario->id }}</td>
                    <td>{{ $usuario->nome }}</td>
                    <td>{{ $usuario->username }}</td>
                    <td>{{ $usuario->senha }}</td>
                    <td>
                        @if(filled($usuario->empresas))
                            @for($i = 0; $i < count($usuario->empresas); $i++)
                                @if($i > 0) <br> @endif
                                {{ $usuario->tipoUsuario[$i]->descricao }}
                                ({{ $usuario->empresas[$i]->nome }})
                            @endfor
                        @else
                            O usuário não está cadastrado em uma empresa.
                        @endif
                        <br>
                        <a href="{{ route('usuarioEmpresa.create', $usuario->id) }}">[Adicionar empresa]</a>
                    </td>
                    <td>
                        <form name="form_delete_{{ $usuario->id }}" action="{{ route('usuarios.destroy', $usuario->id) }}" method="post">
                            @csrf
                            @method("DELETE")
                            <a href="#" onclick="confirmDelete('form_delete_{{ $usuario->id }}');">Excluir</a>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <p>Nenhum usuário foi cadastrado.</p>
@endif

<script>
    function confirmDelete(formName){
        if(confirm("Tem certeza que deseja excluir este usuário?"))
            document.forms[formName].submit();
    }
</script>

</body>
</html>
