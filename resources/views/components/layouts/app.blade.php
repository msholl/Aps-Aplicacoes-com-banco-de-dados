<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aplicação com Banco de Dados</title>

    @vite(['resources/js/app.js'])
</head>
<body class="font-sans antialiased">
<nav class="bg-gray-700 text-slate-200 font-bold">
    <ul class="list-none flex pl-2 py-4">
        <li class="px-2"><a href="{{route('produtos.index')}}">Produtos</a></li>
        <li class="px-2"><a href="{{route('produtos.create')}}">Adicionar produto</a></li>
    </ul>
</nav>

{{ $slot }}

</body>
</html>
