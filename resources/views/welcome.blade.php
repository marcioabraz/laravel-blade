<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/photo" method="post" enctype="multipart/form-data">@csrf
    <input type="file" name="photo">
    <button type="submit">Enviar</button>
</form>
<form action="/image" method="post" enctype="multipart/form-data">@csrf
    <input type="file" name="image1">
    <input type="file" name="image2">
    <button type="submit">Enviar</button>
</body>
</html>