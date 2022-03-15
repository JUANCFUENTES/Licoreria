<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;



class ProductoController extends Controller
{
    public function __construct(){
        //$this->middleware('auth')->only('store','destoy'); Solo aplica a los metodos mencionado
        $this->middleware('auth')->except('index', 'show'); //Aplica a todos los metodos excepto a los metodos mencionado
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos= Producto::all();
        return view('productos.indexProductos', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('productos.formProductos');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request ->validate([
            'nombre' => 'required |min:5|max:255',
            'precio' => ['required'],
            'existencias' => ['required'],
            'categoria' => 'required |min:2',
        ]);


        $producto= new Producto(); //Se crea un objeto
        //Se le asigna la informacion correspondiente a cada campo del parametro que se paso
        $producto->nombre = $request ->nombre;
        $producto->precio = $request ->precio;
        $producto->existencias = $request ->existencias;
        $producto->categoria =  $request ->categoria;
        $producto ->save(); //Se guarda en la base de datos

        return redirect('/productos'); //redirecciona al index
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        return view('productos.showProducto',compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        return view('productos.formProductos', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        $request ->validate([
            'nombre' => 'required |min:5|max:255',
            'precio' => ['required'],
            'existencias' => ['required'],
            'categoria' => 'required |min:2',
        ]);

        $producto->nombre = $request ->nombre;
        $producto->precio = $request ->precio;
        $producto->existencias = $request ->existencias;
        $producto->categoria =  $request ->categoria;
        $producto ->save();

        return redirect('/productos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect('/productos');
    }
}
