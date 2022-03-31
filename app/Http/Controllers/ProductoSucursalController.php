<?php

namespace App\Http\Controllers;

use App\Models\Producto_Sucursal;
use App\Models\Producto;
use App\Models\Sucursal;
use Illuminate\Http\Request;

class ProductoSucursalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sucursals=Sucursal::all();
        return view('stock',compact('sucursals'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto_Sucursal  $producto_Sucursal
     * @return \Illuminate\Http\Response
     */
    public function show(Producto_Sucursal $producto_Sucursal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto_Sucursal  $producto_Sucursal
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto, Sucursal $sucursal)
    {
        return view('stock',compact('producto','sucursal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto_Sucursal  $producto_Sucursal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        $request ->validate([
        'existencias' => 'required |integer ' ,
        ]);

        $producto->sucursals()->syncWithoutDetaching([
            $request->sucursal_id =>['existencias' => $request->existencias]
        ]);

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto_Sucursal  $producto_Sucursal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto_Sucursal $producto_Sucursal)
    {
        //
    }
}
