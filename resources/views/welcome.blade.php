<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body>
        <h1>
            Curso laravel 11
        </h1>

        <!-- Exibe a data atual formatada (por exemplo, dd/mm/yyyy) -->
        <p>Data Atual: {{ now()->format('d/m/Y H:i:s') }}</p>
    </body>
</html>
