<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Obtener todos los pacientes
        $pacientes = Paciente::all();
        return view('paciente.index', compact('pacientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Mostrar el formulario para crear un nuevo paciente
        return view('paciente.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validar los datos de entrada
    $request->validate([
        'nombre' => 'required|string|max:255',
        'edad' => 'required|integer',
        'contacto' => 'required|string|max:255',
        'historial_medico' => 'nullable|string',
        'pulso' => 'nullable|numeric',
        'temperatura' => 'nullable|numeric',
        'altura' => 'nullable|numeric',
    ]);

    // Crear un nuevo paciente
    Paciente::create($request->all());

    // Redirigir a la lista de pacientes
    return redirect()->route('pacientes.index')->with('success', 'Paciente creado exitosamente.');
}

    /**
     * Display the specified resource.
     */
    public function show(Paciente $paciente)
    {
        // Mostrar los detalles del paciente
        return view('paciente.show', compact('paciente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Paciente $paciente)
    {
        // Mostrar el formulario para editar el paciente
        return view('paciente.edit', compact('paciente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Paciente $paciente)
    {
        // Validar los datos de entrada
        $request->validate([
            'nombre' => 'required|string|max:255',
            'edad' => 'required|integer',
            'contacto' => 'required|string|max:255',
            'historial_medico' => 'nullable|string',
            'pulso' => 'nullable|numeric',
            'temperatura' => 'nullable|numeric',
            'altura' => 'nullable|numeric',
        ]);

        // Actualizar el paciente
        $paciente->update($request->all());

        // Redirigir con un mensaje de éxito
        return redirect()->route('pacientes.index')->with('success', 'Paciente actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Paciente $paciente)
    {
        // Eliminar el paciente
        $paciente->delete();

        // Redirigir con un mensaje de éxito
        return redirect()->route('pacientes.index')->with('success', 'Paciente eliminado exitosamente.');
    }
}
