<h1>Reporte de productos</h1>

<ul>
    @foreach ($productos as $producto)
        <li>{{ $producto->nombre }}</li>
    @endforeach

</ul>
