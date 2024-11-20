@component("app")
@endcomponent

@php

if(!isset($_SESSION["usuario"]) || $_SESSION["empresa"]->id != $empresa_id){
    header("location: ../../");
    die();
}

@endphp

<h2>Cadastro de conta</h2>

<form action="{{ route('contas.store', $empresa_id) }}" method="post">
    @csrf
    Valor: R$ <input type="text" name="valor">
    <br><br>
    Descrição: <input type="text" name="descricao" size="50">
    <br><br>
    Tipo da Conta:
    @foreach($tiposConta as $tipoConta)
        <br>
        <input type="radio" name="tipo_conta_id" value="{{ $tipoConta->id }}"> {{ $tipoConta->descricao }}
    @endforeach
    <br><br>
    Data: <input type="date" name="data">
    <br><br>
    <button type="submit">Cadastrar</button>
</form>

</body>
</html>
