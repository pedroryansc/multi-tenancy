@php
    session_start();
@endphp
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>Portal de Portais de Notícias</title>
    <style>
        .nav{
            padding-left: 5px;
            padding-right: 5px;
            border-left: 1px solid black;
            border-right: 1px solid black;
        }
        .noticia{
            color: black;
            text-decoration: none;
        }
        div{
            border: 1px solid black;
            padding-left: 15px;
        }
</style>
</head>
<body>
    <h1>Portal de Portais de Notícias</h1>

    @component("nav")
    @endcomponent

    <hr>
