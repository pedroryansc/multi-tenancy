@extends("app")

@section("body")

<h2>Cadastro de Empresa</h2>

<form action="{{route('empresas.store')}}" method="post">
    @csrf
    Nome: <input type="text" name="nome">
    <br><br>
    <button type="submit">Cadastrar</button>
</form>

@endsection