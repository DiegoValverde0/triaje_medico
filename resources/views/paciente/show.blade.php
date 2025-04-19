{{-- resources/views/pacientes/show.blade.php --}}
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Paciente</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Detalles del Paciente</h1>
        <p><strong>Nombre:</strong> {{ $paciente->nombre }}</p>
        <p><strong>Edad:</strong> {{ $paciente->edad }}</p>
        <p><strong>Contacto:</strong> {{ $paciente->contacto }}</p>
        <p><strong>Historial Médico:</strong> {{ $paciente->historial_medico }}</p>
        <p><strong>Pulso:</strong> {{ $paciente->pulso }}</p>
        <p><strong>Temperatura:</strong> {{ $paciente->temperatura }}</p>
        <p><strong>Altura:</strong> {{ $paciente->altura }}</p>
        <a href="{{ route('pacientes.index') }}" class="btn btn-primary">Volver</a>
    </div>
</body>
</html>