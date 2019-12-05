<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        body{
            padding: 20px;
        }
        .navbar{
            margin-bottom: 20px;
        }
    </style>
    <title>Cadastro de Produtos</title>
</head>
<body>
    <divi class="container">
        @component('component_navbar')
            
        @endcomponent
         <main role="main">
             @hasSection ('body')
                 @yield('body')  
             @endif
         </main>
    </divi>
<script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
</body>
</html>