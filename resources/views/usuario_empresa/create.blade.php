@component("app")
@endcomponent

@php

if(!isset($_SESSION["usuario"]) || $_SESSION["tipo_usuario_id"] != 1){
    header('location: ../');
    die();
}

@endphp

<h2>Relacionamento de Usuário e Empresa</h2>

<form action="{{route('usuarioEmpresa.store', $usuario->id)}}" method="post">
    @csrf
    Usuário: <strong>{{ $usuario->nome }} ({{ $usuario->username }})</strong>
    <br><br>
    Empresa: <select name="empresa_id">
        <option value="">Escolha uma opção</option>
        @foreach($empresas as $empresa)
            <option value="{{ $empresa->id }}">{{ $empresa->nome }}</option>
        @endforeach
    </select>
    <br><br>
    Tipo de Usuário: <select name="tipo_usuario_id">
        <option value="">Escolha uma opção</option>
        @foreach($tiposUsuario as $tipoUsuario)
            <option value="{{ $tipoUsuario->id }}">{{ $tipoUsuario->descricao }}</option>
        @endforeach
    </select>
    <br><br>
    <button type="submit">Cadastrar</button>
</form>

</body>
</html>
