@extends('plantilla')

@section('titulo', 'Crud: Usuario')
    
@section('contenido')
{{ csrf_field() }}
    <table class="table table-dark table-striped">
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
@endsection
