<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{csrf_token()}}">
    @stack("style")
    <title>Portal de Portais de Notícias</title>
</head>
<body @stack("bodyOnLoad")>
    <h1>Portal de Portais de Notícias</h1>

    @component("nav")
    @endcomponent

    <hr>

    @hasSection("body")
        @yield("body")
    @endif

    @stack("script")
</body>
</html>