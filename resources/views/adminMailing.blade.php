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
        <table class="table table-spaced table-striped table-hover">
            <thead>
                <tr>
                    <th><input type="checkbox" id="select-all"></th> 
                    <th>id</th>
                    <th>Mail</th>                    
                    <th>Usuario</th>
                    <th>Ciudad</th>
                    <th>Fecha Ultimo Envio</th>       
                    <th>habilitado</th>               
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
                        <td class="bg-primary text-white rounded text-center" data-fecha-envio="{{ $mail->fecha_de_envio }}">
                            {{ $mail->fecha_de_envio }}
                        </td>
                        <td>{{ $mail->habilitado ? 'Sí' : 'No' }}</td>                
                    </tr>
                @endforeach
            </tbody>
        </table>
        
        <button type="submit" class="btn btn-primary mb-5">Enviar Seleccionados</button>
    </form>

    <!-- Paginación -->
    <div class="d-flex justify-content-center">
        {{ $mails->links() }}
    </div>
    <br>
    <br>

    <script>
        document.getElementById('select-all').onclick = function() {
            var checkboxes = document.getElementsByName('selected_ids[]');
            for (var checkbox of checkboxes) {
                checkbox.checked = this.checked;
            }
        };    
        document.addEventListener("DOMContentLoaded", function() {
            const tds = document.querySelectorAll('td[data-fecha-envio]');
            tds.forEach(td => {
                const fechaEnvio = new Date(td.getAttribute('data-fecha-envio'));
                const hoy = new Date();
                const diffTime = Math.abs(hoy - fechaEnvio);
                const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));
                if (diffDays > 7) {
                    td.classList.remove('bg-primary');
                    td.classList.add('bg-danger');
                }
            });
        });
    </script>
@endsection

