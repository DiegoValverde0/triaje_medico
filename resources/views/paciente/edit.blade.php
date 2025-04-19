{{-- resources/views/pacientes/edit.blade.php --}}
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Paciente</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Editar Paciente</h1>
        <form action="{{ route('pacientes.update', $paciente) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $paciente->nombre }}" required>
            </div>
            <div class="form-group">
                <label for="edad">Edad</label>
                <input type="number" class="form-control" id="edad" name="edad" value="{{ $paciente->edad }}" required>
            </div>
            <div class="form-group">
                <label for="contacto">Contacto</label>
                <input type="text" class="form-control" id="contacto" name="contacto" value="{{ $paciente->contacto }}" required>
            </div>
            <div class="form-group">
                <label for="historial_medico">Historial Médico</label>
                <textarea class="form-control" id="historial_medico" name="historial_medico">{{ $paciente->historial_medico }}</textarea>
            </div>
            <div class="form-group">
                <label for="pulso">Pulso</label>
                <input type="text" class="form-control" id="pulso" name="pulso" value="{{ $paciente->pulso }}">
            </div>
            <div class="form-group">
                <label for="temperatura">Temperatura</label>
                <input type="text" class="form-control" id="temperatura" name="temperatura" value="{{ $paciente->temperatura }}">
            </div>
            <div class="form-group">
                <label for="altura">Altura</label>
                <input type="text" class="form-control" id="altura" name="altura" value="{{ $paciente->altura }}">
            </div>
            <button type="submit" class="btn btn-success">Actualizar</button>
            <a href="{{ route('pacientes.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>