<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Muestra una coleccion del recurso
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Mostramos un formulario para crear nuevos ejemplos
        // Carpeta.archivo
        // se pasa a la vista create la variable $product
        // Aca sera un objeto vacio de producto
        $product = new Product;
        return view('products.create',['product' => $product]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Almacenar en la base de datos nuevos recursos 
        // var_dump($request);
        $options = [
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price
        ];
        if(Product::create($options)){
          return redirect('/');
        }else {
           return view('products.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Muestra un recurso
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Muestra un formulario para editar un recurso
        $product = Product::find($id);
        return view('products.edit',['product' => $product]);
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
        // Actualizar un recurso especifico
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Eliminar un recurso
    }
}
