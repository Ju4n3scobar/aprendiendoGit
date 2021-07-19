@extends('plantilla')

@section('titulo', 'Crud: Usuario')
    
@section('contenido')
    <form action="{{ route('contactConsultarB')  }}" style="margin-left: 700px; margin-top: 20px;" method="post">
        {{ csrf_field() }}
        <label for="userName">Ingrese el nombre de la persona que desea buscar</label>&nbsp;&nbsp;&nbsp;
        <input type="text" id="userName" name="userNameC" placeholder="Ingrese el nombre aqui">
        <table class="position-absolute top-50 start-50 translate-middle table table-dark table-striped" style="margin-top: -50px">

                <tr>
                    <th>
                        Id del Usuario
                    </th>
                    <th>
                        Nombre de Usuario
                    </th>
                </tr>
            @foreach ($usuarios as $usuario)
                <tr> 
                    <td>
                        {{$usuario->id}}
                    </td>
                    <td>
                        {{$usuario->userName}}
                    </td>
                </tr>        
            @endforeach
        </table>
        <input type="submit" value="Buscar">
    </form>
@endsection