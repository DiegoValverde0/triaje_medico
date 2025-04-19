<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'edad',
        'contacto',
        'historial_medico',
        'pulso',
        'temperatura',
        'altura',
    ];

    public function emergencias()
    {
        return $this->hasMany(Emergencia::class);
    }

    public function consultas()
    {
        return $this->hasMany(Consulta::class);
    }

    public function citas()
    {
        return $this->hasMany(Cita::class);
    }

    public function facturas()
    {
        return $this->hasMany(Factura::class);
    }

    public function notificaciones()
    {
        return $this->hasMany(Notificacion::class);
    }
}