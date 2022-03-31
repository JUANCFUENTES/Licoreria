<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Producto;
use App\Models\Sucursal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $categorias=Categoria::all();
        $sucursals=Sucursal::all();
        return view('productos.formProductos', compact('categorias','sucursals'));
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
            'descripcion' => ['required'],
            'contenido' => ['required'],
            'categoria_id' => 'required',
            //'sucursal_id' => 'required' ,
            //'existencias' => 'required' ,
        ]);

        //$request->merge(['user_id' => Auth::id()]); //Esto sirve para agregarle mas atributos
        $producto = Producto::create($request->all()); //solo funciona si los nombres de las columnas corresponden a los nombres del formulario

        $sucursals=Sucursal::all();

        foreach($sucursals as $sucursal){
            $producto->sucursals()->attach($sucursal->id, ['existencias' => 0, 'created_at' => now(), 'updated_at' => now()]);
        }

        return redirect('/'); //redirecciona al index
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
        $sucursals=Sucursal::all();
        $categorias=Categoria::all();
        return view('productos.formProductos', compact('producto', 'categorias','sucursals'));
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
            'descripcion' => ['required'],
            'contenido' => ['required'],
            'categoria_id' => 'required',
            //'sucursal_id' => 'required' ,
            //'existencias' => 'required' ,
        ]);
        Producto::where('id', $producto->id)->update($request->except(['_token','_method']));

        /*$producto->sucursals()->sync([
            $request->sucursal_id =>['existencias' => $request->existencias]
        ]);*/
        return redirect('/');
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
        return redirect('/');
    }
}
