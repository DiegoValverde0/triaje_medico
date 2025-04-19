<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultasTable extends Migration
{
    public function up()
    {
        Schema::create('consultas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('paciente_id')->constrained()->onDelete('cascade');
            $table->text('diagnostico');
            $table->text('tratamiento');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('consultas');
    }
}
