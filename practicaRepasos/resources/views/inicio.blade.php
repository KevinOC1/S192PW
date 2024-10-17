<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.js']) 
    <title>Document</title>
    <style>
        body, html{
            height: 100%
        }
        .full-height{
            height: 100vh;
        }
    </style>
</head>
<body>
<div class="d-flex flex-column justify-content-center align-items-center text-center full-height" style="font-family: 'Arial', sans-serif;">
 
        <h1 class="display-1">Repaso 1 Laravel</h1>
        <p>Programación Web </p>
        <p>Ivan Isay Guerra Lopez </p>
        <p>Kevin Isaac Ordaz Cuevas</p>
        <p>122042888</p>    
        <p>S-192 </p>

        <a href="{{ route('rutarepaso') }}" class="btn btn-dark">Repaso 1</a>
    
    </div>
</body>
</html>