@extends('plantilla')

@section('titulo', 'Crud: Usuario')
    
@section('contenido')
        <form action="{{ route('contactConsultarB')  }}" style="margin-left: 700px; margin-top: 20px;" method="post">
        {{ csrf_field() }}
        <label for="userName">Ingrese el nombre de la persona que desea buscar</label>&nbsp;&nbsp;&nbsp;
        <input type="text" id="userName" name="userNameC" placeholder="Ingrese el nombre aqui">

        <input type="submit" value="Buscar"> 
    </form>
@endsection
