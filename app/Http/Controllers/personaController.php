<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{

    public function index()
    {
        // Extraer las personas dela base de datos
        $personas = Persona::paginate(20);
        //Devolver la vista y pasar las personas
        return view('personas.index', compact('personas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Mostrar el formulario para crear una nueva persona

        return view('personas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //insertar una nueva persona en la base de datos
            $persona = new Persona();   
            $persona->nombre = $request->nombre;
            $persona->cedula = $request->cedula;
            $persona->telefono = $request->telefono;
            $persona->sexo = $request->sexo;
            $persona->save();
            return redirect()->route('personas.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function show(Persona $persona)
    {
          //mostrar la persona en detalle
          return view('personas.show', compact('persona'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function edit(Persona $persona)
    {
        //Mostrar lavista de una persona
        return view('personas.edit', compact('persona'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Persona $persona)
    {
         //Guardar los cambios en la base de datos
            $persona->nombre = $request->nombre;    
            $persona->cedula = $request->cedula;
            $persona->telefono = $request->telefono;
            $persona->sexo = $request->sexo;
            $persona->save();
            return redirect('/personas');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function destroy(Persona $persona)
    {
          //Eliminar la persona de la base de datos
          $persona->delete();
          //Redireccionar al index de personas
          return redirect()->route('personas.index');
    }
}
