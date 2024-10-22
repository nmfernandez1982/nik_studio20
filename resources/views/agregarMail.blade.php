@extends('layouts.plantilla')
@section('contenido')
        <h1>Alta de un nuevo mail</h1>

        <div class="alert bg-light border border-white shadow round col-8 mx-auto p-4">

            <form action="/agregarMail" method="post" enctype="multipart/form-data">
            @csrf
                Email: <br>
                <input type="text" name="email"
                       value="{{ old('email') }}"
                       class="form-control">
                <br>
                Ciudad: <br>
                <input type="text" name="ciudad"
                       value="{{ old('ciudad') }}"
                       class="form-control">
                <br>               
                Usuario: <br>
                <input type="text" name="usuario"
                       value="{{ old('usuario') }}"
                       class="form-control">
                <br>                
                <button class="btn btn-primary mb-3">Agregar Mail</button>
                <a href="/adminMails" class="btn btn-outline-secondary mb-3">Volver</a>
            </form>
        </div>

        @if( $errors->any() )
            <div class="alert alert-danger col-8 mx-auto">
                <ul>
                    @foreach( $errors->all() as $error )
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif       
   @endsection