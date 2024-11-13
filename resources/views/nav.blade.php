| <a href="{{route('empresas.index')}}">Empresas</a> |
@if(isset($_SESSION["usuario"]) && $_SESSION["usuario"]->tipo_usuario_id == 1)
    <a href="{{route('empresas.create')}}">Cadastrar empresa</a> |
    <a href="{{route('usuarios.index')}}">Usuários</a> |
    <a href="{{route('usuarios.create')}}">Cadastrar usuário</a> |
@endif
@if(!isset($_SESSION["usuario"])) <a href="{{route('login')}}">Login</a> @else <a href="{{route('sair')}}">Sair</a> @endif
|
