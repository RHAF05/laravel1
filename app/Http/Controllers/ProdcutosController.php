<?php

namespace App\Http\Controllers;

use App\Prodcuto;
use App\Producto;
use Illuminate\Http\Request;

class ProdcutosController extends Controller
{
    public function listar(){

        $productos=Producto::all();
        return view('productos',compact('productos'));
    }

    public function crear(){
        $producto = new Producto();
        $producto->codigo='004';
        $producto->nombre='Mango';
        $producto->precio='1500';
        $producto->save();
    }

    public function editar($id){
        $producto = Producto::find($id);
        $producto->nombre = 'Manzana';
        $producto->save();
    }

    public function eliminar($id){
        $producto = Producto::find($id);
        $producto->delete();
        dd($producto);
    }
}
