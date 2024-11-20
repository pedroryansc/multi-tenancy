@component("app")
@endcomponent

@php

if(!isset($_SESSION["usuario"]) || $_SESSION["tipo_usuario_id"] != 1){
    header('location: ../');
    die();
}

@endphp

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
    <button type="submit">Cadastrar</button>
</form>

</body>
</html>
