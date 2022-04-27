<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name')}}</title>
     <!-- Fonts -->
     <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body{
            font-family: 'Nunito'
        }
    </style>
</head>
<body>
    @yield('content')
</body>
<script src="{{ asset('js/app.js') }}" defer></script>
</html>