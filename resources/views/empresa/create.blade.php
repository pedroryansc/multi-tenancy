@extends("app")

@section("body")

@php
if(!isset($_SESSION["usuario"]) || $_SESSION["usuario"]->tipo_usuario_id != 1){
    header("location:index.blade.php");
}
@endphp

<h2>Cadastro de Empresa</h2>

<form action="{{route('empresas.store')}}" method="post">
    @csrf
    Nome: <input type="text" name="nome">
    <br><br>
    <button type="submit">Cadastrar</button>
</form>

@endsection
