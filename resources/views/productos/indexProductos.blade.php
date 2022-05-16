<x-layout>
    <link rel="stylesheet" href="{{ asset('css/tables.css') }}">

    <a href="/enviar-reporte">Enviar Correo con Reporte de Productos</a>

    <table >
        <br>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Contenido</th>
            <th>Precio</th>
            <th>Categoria</th>
            <th>Acciones</th>
        </tr>

    @foreach ($productos as $producto )
        <tr>

            <td>{{ $producto->id }}</td>
            <td>{{ $producto->nombre }}</td>
            <td>{{ $producto->contenido }}</td>
            <td>${{ $producto->precio }}</td>
            <td>{{ $producto->categoria->nombre_categoria }}</td> {{-- Ejemplo de JOIN --}}
            <td>
                <a href="productos/{{ $producto->id }}">Ver Detalle</a> <br>

                @can('update',$producto)
                <a href="productos/{{ $producto->id }}/edit">Editar</a> <br>
                @endcan

                @can('delete',$producto)
                <form action="productos/{{ $producto->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Borrar" class="btn btn-primary d-block" style="color: white">
                </form>
                @endcan

            </td>

        </tr>
    @endforeach

    </table>
    <br>
    <div style="text-align: center">
        @can('create', App\Models\Producto::class)
        <button><a href="/productos/create">Registrar nuevo producto</a> <br> </button>
        @endcan

    </div>
    <br>

</x-layout>
