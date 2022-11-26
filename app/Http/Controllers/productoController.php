<?php

namespace App\Http\Controllers;
use App\Models\Producto;

use Illuminate\Http\Request;

class productoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Extraer las personas dela base de datos
          $productos = Producto::paginate(20);
          //Devolver la vista y pasar las personas
          return view('productos.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Mostrar el formulario para crear una nueva persona

         return view('productos.create');
          
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
          $productos = new producto();
          $productos->imagen = $request->codigo;
          $productos->nombre = $request->nombre;
          $productos->color = $request->color;
          $productos->no_tenis = $request->no_tenis;
          $productos->save();
          return redirect('/productos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
          //mostrar la persona en detalle
          return view('productos.show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         //Mostrar lavista de una tarjeta
         return view('productos.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Guardar los cambios en la base de datos
        $producto->update($request->all());
        //Redireccionar al index de personas
        return redirect()->route('productos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Eliminar la persona de la base de datos
        $producto->delete();
        //Redireccionar al index de personas
        return redirect()->route('$productos.index');
    }
}
