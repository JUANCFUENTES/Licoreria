<x-layout>
    <h1>Informacion de producto</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Existencias</th>
            <th>Categoria</th>
        </tr>

        <tr>
            <td>{{ $producto->id }}</td>
            <td>{{ $producto->nombre }}</td>
            <td>${{ $producto->precio }}</td>
            <td>{{ $producto->existencias }}</td>
            <td>{{ $producto->categoria }}</td>
        </tr>

    </table>
</x-layout>
