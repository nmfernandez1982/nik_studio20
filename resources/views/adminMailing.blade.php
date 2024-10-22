@extends('layouts.plantilla')
@section('contenido')
    <h1>Envio de Mailing</h1>
    @if (session('mensaje'))
        <div class="alert alert-{{ (session('color')) ? 'warning' : 'success' }}">
            {{ session('mensaje') }}
        </div>
    @endif
    
    <form action="{{ route('enviar.mails') }}" method="POST">
        @csrf
        <table class="table table-borderless table-striped table-hover">
            <thead>
                <tr>
                    <th><input type="checkbox" id="select-all"></th> 
                    <th>id</th>
                    <th>Mail</th>                    
                    <th>Usuario</th>
                    <th>Ciudad</th>
                    <th>Fecha Ultimo Envio</th>                    
                </tr>
            </thead>
            <tbody>
                @foreach($mails as $mail)
                    <tr>
                        <td><input type="checkbox" name="selected_ids[]" value="{{ $mail->id }}"></td>
                        <td>{{ $mail->id }}</td>
                        <td>{{ $mail->email }}</td>
                        <td>{{ $mail->ciudad }}</td>
                        <td>{{ $mail->Persona }}</td>
                        <td>19-10-2024</td>                       
                    </tr>
                @endforeach
            </tbody>
        </table>
        
        <button type="submit" class="btn btn-primary">Enviar Seleccionados</button>
    </form>
    <script>
        document.getElementById('select-all').onclick = function() {
            var checkboxes = document.getElementsByName('selected_ids[]');
            for (var checkbox of checkboxes) {
                checkbox.checked = this.checked;
            }
        };
    </script>
@endsection
