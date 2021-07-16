<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Crud:Usuario</title>
</head>
<body>
    <form action="{{ route('contactConsultarB')  }}" style="margin-left: 700px; margin-top: 20px;" method="GET">
        {{ csrf_field() }}
        <label for="userName">Ingrese el nombre de la persona que desea buscar</label>&nbsp;&nbsp;&nbsp;
        <input type="text" id="userName" name="userNameC" placeholder="Ingrese el nombre aqui">

        <input type="submit" value="Buscar">


        

            

    </form>
</body>
</html>