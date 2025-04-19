{{-- resources/views/pacientes/index.blade.php --}}
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pacientes</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Lista de Pacientes</h1>
        <a href="{{ route('pacientes.create') }}" class="btn btn-primary mb-3">Agregar Paciente</a>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Edad</th>
                    <th>Contacto</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pacientes as $paciente)
                    <tr>
                        <td>{{ $paciente->nombre }}</td>
                        <td>{{ $paciente->edad }}</td>
                        <td>{{ $paciente->contacto }}</td>
                        <td>
                            <a href="{{ route('pacientes.show', $paciente) }}" class="btn btn-info">Ver</a>
                            <a href="{{ route('pacientes.edit', $paciente) }}" class="btn btn-warning">Editar</a>
                            <!-- Botón que activa el modal -->
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal{{ $paciente->id }}">
                                Eliminar
                            </button>

                            <!-- Modal de confirmación -->
                            <div class="modal fade" id="deleteModal{{ $paciente->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel{{ $paciente->id }}" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteModalLabel{{ $paciente->id }}">Confirmar Eliminación</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            ¿Estás seguro de que deseas eliminar a {{ $paciente->nombre }}?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                            <form action="{{ route('pacientes.destroy', $paciente) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Eliminar</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>