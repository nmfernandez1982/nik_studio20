@extends('layouts.plantilla')

    @section('contenido')

        <h1>Administracion de Mailing</h1>

        @if ( session('mensaje') )
            <div class="alert alert-{{ ( session('color') )?'warning':'success' }}">
                {{ session('mensaje') }}
            </div>
        @endif

        <table class="table table-borderless table-striped table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Mail</th>
                    <th>Ciudad</th>
                    <th>Usuario</th>
                    <th colspan="2">
                        <a href="/agregarMail" class="btn btn-primary">
                            Agregar
                        </a>
                    </th>
                </tr>
            </thead>
            <tbody>
        @foreach( $mails as $mail )
                <tr>
                    <td>{{ $mail->id }}</td>
                    <td>{{ $mail->email }}</td>
                    <td>{{ $mail->ciudad }}</td>
                    <td>{{ $mail->Persona}}</td>
                    <td>
                        <a href="/modificarMail/{{ $mail->id }}" class="btn btn-warning">
                            Modificar
                        </a>
                    </td>
                    <td>
                        <a href="/eliminarMail/{{ $mail->id }}" class="btn btn-danger">
                            Eliminar
                        </a>
                    </td>
                </tr>
        @endforeach
            </tbody>
        </table>
    @endsection
