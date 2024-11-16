<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;


class Productos extends Controller
{
    public function index()
    {
        $items= Producto::paginate(2);
        return view('modules/products/index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('modules/products/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $item = new Producto();
       $item->nombre=$request->nombre;
       $item->descripcion = $request->descripcion;
       $item->save();
       return to_route('index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $item = Producto::find($id);
        return view('modules/products/show', compact('item'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item= Producto::find($id);
        return view('modules/products/edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $item = Producto::find($id);
        $item->nombre=$request->nombre;
        $item->descripcion = $request->descripcion;
        $item->save();
        return to_route('index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Producto::find($id);
        $item->delete();
        return to_route('index');
    }
}
