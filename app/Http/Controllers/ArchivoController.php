<?php

namespace App\Http\Controllers;

use App\Models\Archivo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArchivoController extends Controller
{
    public function store(Request $request){

        $this->authorize('create',Archivo::class); //Primer parametro es el nombre del metodo de nuestra policy

        $request ->validate([
            'archivos' => 'required|max:2048'
        ]);

        foreach($request->archivos as $archivo){
            if($archivo->isValid()){
                $nombre_hash = $archivo->store('productos');

                $registroArchivo= new Archivo();
                $registroArchivo->producto_id = $request->producto_id;
                $registroArchivo->nombre = $archivo->getClientOriginalName();
                $registroArchivo->nombre_hash = $nombre_hash;
                $registroArchivo->mime = $archivo->getClientMimeType();
                $registroArchivo->save();
            }
        }
        return redirect()->route('productos.show',$request->producto_id)
        ->with(['mensaje' => 'Archivos cargados con exito']);
    }

    public function destroy(Archivo $archivo, Request $request){
        $this->authorize('delete',$archivo); //Primer parametro es el nombre del metodo de nuestra policy

        Storage::delete($archivo->nombre_hash);

        $archivo->delete();

        return redirect()->route('productos.show',$request->producto_id);
    }
}
