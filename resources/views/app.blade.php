<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        @vite('resources/css/app.css')

    
    </head>
    <body>

        <h1 class="">Hola mundo</h1>
        <p class="text-red-400">Rojo claro</p>
        <p class="text-red-500">Rojo normal</p>
        <p class="text-red-600">Rojo fuerte</p>
        <p class="text-red-700">Rojo muy fuerte</p>

        <div class="text-red-500 text-4xl font-bold">
            ESTE TEXTO DEBE SER ROJO
        </div>

        <div class="bg-black text-red-500 text-10xl font-bold p-6">
          TAILWIND FUNCIONANDO CORRECTAMENTE
        </div>
       
    </body>
</html>
