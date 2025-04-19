<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emergencia extends Model
{
    use HasFactory;

    protected $fillable = [
        'paciente_id',
        'consultorio',
    ];

    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }
}