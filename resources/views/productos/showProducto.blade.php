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
                    {{ $data->domicilio }} =>
                    {{ $data->pivot->existencias }} <br>
                @endforeach
            </td>
        </tr>

    </table>
    <br>
</x-layout>
