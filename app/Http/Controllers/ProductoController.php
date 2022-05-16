<?php

namespace App\Http\Controllers;

use App\Mail\Reporte;
use App\Models\Categoria;
use App\Models\Producto;
use App\Models\Sucursal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class ProductoController extends Controller
{
    public function __construct(){
        //$this->middleware('auth')->only('store','destoy'); Solo aplica a los metodos mencionado
        $this->middleware('verified')->except('index', 'show'); //Aplica a todos los metodos excepto a los metodos mencionado
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$productos= Producto::all();
       $productos= Producto::with('categoria:id,nombre_categoria')->get();  //Reducir las sentencias sql
        return view('productos.indexProductos', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        $this->authorize('create',Producto::class); //Primer parametro es el nombre del metodo de nuestra policy

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
        $this->authorize('create',Producto::class); //Primer parametro es el nombre del metodo de nuestra policy

        $request ->validate([
            'nombre' => 'required |min:5|max:255',
            'precio' => ['required'],
            'descripcion' => 'required |min:5|max:255',
            'contenido' => ['required'],
            'categoria_id' => 'required',
        ]);

        //$request->merge(['user_id' => Auth::id()]); //Esto sirve para agregarle mas atributos
        $producto = Producto::create($request->all()); //solo funciona si los nombres de las columnas corresponden a los nombres del formulario

        $sucursals=Sucursal::all();

        foreach($sucursals as $sucursal){
            $producto->sucursals()->attach($sucursal->id, ['existencias' => 0, 'created_at' => now(), 'updated_at' => now()]);
        }

        return redirect('/') //redirecciona al index
        ->with([
            'mensaje' => '¡Producto Agregado!',
            'alert-type' => 'alert-success',
        ]);
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
        $this->authorize('update',$producto); //Primer parametro es el nombre del metodo de nuestra policy


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
        $this->authorize('update',$producto); //Primer parametro es el nombre del metodo de nuestra policy


        $request ->validate([
            'nombre' => 'required |min:5|max:255',
            'precio' => ['required'],
            'descripcion' => 'required |min:5|max:255',
            'contenido' => ['required'],
            'categoria_id' => 'required',
        ]);
        Producto::where('id', $producto->id)->update($request->except(['_token','_method']));

        /*$producto->sucursals()->sync([
            $request->sucursal_id =>['existencias' => $request->existencias]
        ]);*/
        return redirect('/')
        ->with([
            'mensaje' => 'Actualizacion exitosa',
            'alert-type' => 'alert-success',
        ]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        $this->authorize('delete',$producto); //Primer parametro es el nombre del metodo de nuestra policy

        foreach($producto->archivos() as $archivo){
            //Storage::delete($archivo->nombre_hash);

        }

       /* $producto->delete();
        return redirect('/')
        ->with([
            'mensaje' => 'Producto eliminado',
            'alert-type' => 'alert-danger',
        ]);*/

        //return redirect('prueba',compact($producto->id));
        return redirect()->route('prueba',$producto->id);
    }


    public function enviarReporte(){
        Mail::to(Auth::user()->email)->send(new Reporte());
        return redirect()->back();
    }

}
