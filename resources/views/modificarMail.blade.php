@extends('layouts.plantilla')
@section('contenido')
        <h1>Modificación de un mail</h1>

        <div class="alert bg-light border border-white shadow round col-8 mx-auto p-4">

            <form action="/modificarMail" method="post" enctype="multipart/form-data">
           @method('patch')
            @csrf
            <input type="hidden" name="id" 
            value="{{ old('id', $mail->id) }}"                 
            class="form-control">
            Email: <br>
            <input type="text" name="email" 
            value="{{ old('email', $mail->email) }}"                 
            class="form-control">
            <br>
            Ciudad: <br>
            <input type="text" name="ciudad"
            value="{{ old('ciudad', $mail->ciudad) }}"   
                   class="form-control">
            <br>               
            Usuario: <br>
            <input type="text" name="usuario"
            value="{{ old('usuario', $mail->Persona) }}"   
                   class="form-control">
            <br>  

                <button class="btn btn-dark mb-3">Modificar Mail</button>
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