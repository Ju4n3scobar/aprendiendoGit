<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Bienvenido:{{$userName}}</title>
</head>
<body>
    <div class="position-absolute top-50 start-50 translate-middle" style="height: 300px; width: 500px;">
        <i class="fas fa-user position-absolute top-60 start-50" style="margin-top: 80px; font-size: 30px;"></i>
        <p class="fs-1 position-relative top-50 start-50 translate-middle" style="width: 500px; margin-left: 115px;">Bienvenido {{$userName}}</p>
    </div>
</body>
</html>