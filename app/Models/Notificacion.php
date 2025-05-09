<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notificacion extends Model
{
    use HasFactory;

    protected $fillable = [
        'paciente_id',
        'mensaje',
        'leido',
    ];

    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }
}