<table>
    <tr>
        <td class="nav">
            <a href="{{route('empresas.index')}}">Empresas</a>
        </td>
        @if(isset($_SESSION["usuario"]) && $_SESSION["usuario"]->tipo_usuario_id == 1)
            <td class="nav">
                <a href="{{route('usuarios.index')}}">Usuários</a>
            </td>
            <td class="nav">
                <a href="{{route('usuarios.create')}}">Cadastrar usuário</a>
            </td>
        @endif
        @if(isset($_SESSION["usuario"]))
            <td class="nav">
                <a href="{{route('contas.index', $_SESSION['usuario']->empresa_id)}}">Contas</a>
            </td>
            <td>
                <a href="{{route('contas.create', $_SESSION['usuario']->empresa_id)}}">Cadastrar conta</a>
            </td>
        @endif
        @if(!isset($_SESSION["usuario"]))
            <td class="nav">
                <a href="{{route('login')}}">Login</a>
            </td>
        @else
            <td class="nav">
                <form name="form_sair" action="{{ route('sair') }}" method="post">
                    @csrf
                    @method("GET")
                    <a href="#" onclick="confirmarSair();">Sair</a>
                </form>
            </td>
        @endif
    </tr>
</table>

<script>
    function confirmarSair(){
        if(confirm("Tem certeza que deseja sair da sessão?"))
            document.forms["form_sair"].submit();
    }
</script>
