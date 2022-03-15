<x-layout>
    <a href="/productos/create">Registrar nuevo producto</a> <br>

    <table>
        <br>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Existencias</th>
            <th>Categoria</th>
            <th>Acciones</th>
        </tr>

    @foreach ($productos as $producto )
        <tr>
            <td>{{ $producto->id }}</td>
            <td>{{ $producto->nombre }}</td>
            <td>${{ $producto->precio }}</td>
            <td>{{ $producto->existencias }}</td>
            <td>{{ $producto->categoria }}</td>
            <td>
                <a href="productos/{{ $producto->id }}">Ver Detalle</a> <br>
                <a href="productos/{{ $producto->id }}/edit">Editar</a> <br>
                <form action="productos/{{ $producto->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Borrar">
                </form>
            </td>

        </tr>
    @endforeach



    </table>

</x-layout>
