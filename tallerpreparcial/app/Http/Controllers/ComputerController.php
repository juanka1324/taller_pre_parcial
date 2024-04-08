<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer as Computadores;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\CreateComputerRequest;

class ComputerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('computadores.index', ['Computadores'=>Computadores::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        Log::debug('ComputerController@create');
        return view ('computadores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateComputerRequest $request)
    {
        $computadores = new Computadores($request->all());
    
        $computadores ->save();
 
        return redirect()->route('computadores.index')->with('success', 'Computer created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $computador = Computadores::findOrFail($id);
        return response()->json($computador);
    }
    


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
    $computador = Computadores::find($id);
    return view('computadores.edit', compact('computador'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreateComputerRequest $request, $id)
{
    // Encuentra el computador por su ID
    $computer = Computadores::findOrFail($id);

    // Actualiza los datos del computador con los datos validados del formulario
    $computer->update($request->all());

    // Redirige a la ruta 'computadores.index' con un mensaje de éxito
    return redirect()->route('computadores.index')->with('success', 'Computer updated successfully.');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $computador = Computadores::findOrFail($id);
        $computador->delete();
    
        return redirect()->route('computadores.index');
    }
    
}
