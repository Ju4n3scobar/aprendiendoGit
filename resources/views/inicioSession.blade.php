<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>CRUD:Usuario</title>
</head>
<body>
    
        <form action="{{ route('contactInicio') }}" class="position-absolute top-50 start-50 translate-middle" id="formulario" method="POST">
            {{ csrf_field() }}
            <div class="border border-info p-3">    
                <div class="mb-3">
                    <label for="userName"  class="form-label">Usuario</label>
                    <input name="userName" type="text" placeholder="Ingrese su usuario" class="form-control" id="userName">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input name="password" type="password" placeholder="Ingrese su contraseña" class="form-control" id="password">
                </div>
                <button type="submit" class="position-absolute top-100 start-50 translate-middle btn btn-primary">IniciarSession</button>
            </div>
        </form>
</body>
</html>
