<x-layout>
    <link rel="stylesheet" href="{{ asset('css/tables.css') }}">
    <h1 style="text-align: center">Informacion del producto</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Contenido</th>
            <th>Precio</th>
            <th>Categoria</th>
            <th>Existencias</th>
            <th>Imagenes</th>
        </tr>

        <tr>
            <td>{{ $producto->id }}</td>
            <td>{{ $producto->nombre }}</td>
            <td>{{ $producto->descripcion }}</td>
            <td>{{ $producto->contenido }}</td>
            <td>${{ $producto->precio }}</td>
            <td>{{ $producto->categoria->nombre_categoria }}</td>
            <td>
                @foreach ($producto->sucursals as $data)

                    <form action="/stock/{{ $producto->id}}/{{ $data->id}}/edit" method="POST">
                        @csrf
                        @method('GET')
                        {{ $data->domicilio }} =>
                        {{ $data->pivot->existencias }}
                        <input type="submit" value="Actualizar" class="btn btn-primary d-block" style="color: white">
                    </form> <br>

                @endforeach
            </td>
            <td>
                @foreach ($producto->archivos as $archivo)

                <form action="/archivo/{{ $archivo->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="producto_id" value= "{{ $producto->id }}" >
                    <img src="data:image/jpeg;base64,{{ base64_encode(\Storage::get($archivo->nombre_hash)) }}" alt="">
                    <br> <br>
                    @can('delete',$producto)
                    <input type="submit" value="Eliminar" class="btn btn-primary d-block" style="color: white">
                    @endcan
                </form>


                <br> <br>
                @endforeach
            </td>
        </tr>

    </table>
    <br>
        @can('create',$producto)
        <div class="card text-center">
            <div class="card-header">
                Subir Imagen:
            </div>
            <div class="card-body">
                <form action="/archivo" method="POST" enctype="multipart/form-data">
                    @csrf
                 <input type="hidden" name="producto_id" value= "{{ $producto->id }}" >

                    <input type="file"  value="Agregar imagen"  style="color: white" name="archivos[]"  multiple >

                     <!-- Validacion -->
                      @error('archivos')
                     <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                     <div class="card-footer text-muted">
                        <input type="submit" value="Guardar" class="btn btn-primary" style="color: white">
                      </div>

                </form> <br>
            </div>
          </div>
          @endcan
    <br>
</x-layout>
