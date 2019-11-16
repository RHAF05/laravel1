<?php

namespace App\Http\Controllers;

use App\Servicio;
use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    /**
     * lista todos los servicios
     */
    public function index()
    {
        $servicios = Servicio::all();
        // dd($servicios);
        return view('servicios.listar',compact('servicios'));
    }

    /**
     * funcion para mostrar el formulario para crear un servicio
     */
    public function create()
    {
        return view('servicios.crear');
    }

    /**
     * Funcion para guardar el servicio
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Mostrar toda la informacio de un servicio en especifico
     */
    public function show($id)
    {
        //
    }

    /**
     * Muestra el formulario para modificar un servicio
     */
    public function edit($id)
    {
        //
    }

    /**
     * actualiza la informacion en la base de datos de un servicio.
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Elimina un registro de la base de datos
     */
    public function destroy($id)
    {
        //
    }
}
