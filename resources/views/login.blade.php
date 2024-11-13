@extends("app")

@section("body")

<h2>Login</h2>

<form action="{{route('verificarLogin')}}" method="post">
    @csrf
    Empresa: <select name="empresa_id">
        <option value="">Escolha uma opção</option>
        @foreach($empresas as $empresa)
        <option value="{{ $empresa->id }}">{{ $empresa->nome }}</option>
        @endforeach
    </select>
    <br><br>
    Nome de Usuário: <input type="text" name="username">
    <br><br>
    Senha: <input type="password" name="senha">
    <br><br>
    <button type="submit">Fazer login</button>
</form>

@endsection
