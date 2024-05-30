<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resultado Pedro Henrique</title>
</head>
<body>
    <h1>Resultado do Formulario</h1>
    @if (session('sucesso'))
    <div>
        {{session('sucesso') }}
    </div>

    @endif
    <a href="{{ route('index.cliente') }}">Voltar</a>
</body>
</html>
