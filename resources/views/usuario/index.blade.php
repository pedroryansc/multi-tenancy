@extends("app")

@section("body")

<h2>Usuários</h2>

@if(count($usuarios) != 0)
    <table border="1">
        <thead>
            <th>ID</th>
            <th>Nome</th>
            <th>Nome de usuário</th>
            <th>Senha</th>
            <th>Tipo de usuário</th>
            <th>Empresa</th>
        </thead>
        <tbody>
            @foreach($usuarios as $usuario)
                <tr>
                    <td>{{ $usuario->id }}</td>
                    <td>{{ $usuario->nome }}</td>
                    <td>{{ $usuario->username }}</td>
                    <td>{{ $usuario->senha }}</td>
                    <td>{{ $usuario->tipoUsuario->descricao }}</td>
                    <td>{{ $usuario->empresa->nome }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <p>Nenhum usuário foi cadastrado.</p>
@endif

@endsection
