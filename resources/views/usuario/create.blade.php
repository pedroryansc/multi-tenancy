@extends("app")

@section("body")

<h2>Cadastro de Usuário</h2>

<form action="{{route('usuarios.store')}}" method="post">
    @csrf
    Nome: <input type="text" name="nome">
    <br><br>
    Nome de Usuário: <input type="text" name="username">
    <br><br>
    Senha: <input type="password" name="senha">
    <br><br>
    Confirmar Senha: <input type="password" name="confirmarSenha">
    <br><br>
    Tipo de Usuário: <select name="tipo_usuario_id">
        <option value="">Escolha uma opção</option>
        @foreach($tiposUsuario as $tipoUsuario)
            <option value="{{ $tipoUsuario->id }}">{{ $tipoUsuario->descricao }}</option>
        @endforeach
    </select>
    <br><br>
    Empresa: <select name="empresa_id">
        <option value="">Escolha uma opção</option>
        @foreach($empresas as $empresas)
            <option value="{{ $empresas->id }}">{{ $empresas->nome }}</option>
        @endforeach
    </select>
    <br><br>
    <button type="submit">Cadastrar</button>
</form>

@endsection
