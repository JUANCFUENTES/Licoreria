<x-layout>
    <h1>Registra un producto</h1>

    <!-- Validacion  -->
    @if ($errors->any())
             <div class="alert alert-danger">
                 <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
             </div>
    @endif

    @isset($producto)
    <form action="/productos/{{ $producto->id }}" method="POST">  {{-- Editar --}}
        @method('PATCH')

        @else
        <form action="/productos" method="POST">  {{-- Crear --}}
    @endisset

        @csrf
        <label for="nombre">Nombre del producto:</label> <br>
        <input type="text" name="nombre" value="{{ isset($producto) ? $producto->nombre : old('nombre') }}"> <br>

        <!-- Validacion -->
        @error('nombre')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <br>
        <label for="precio">Precio:</label> <br>
        <input type="text" name="precio" value="{{ isset($producto) ? $producto->precio : old('precio') }}">
         <br>

        <!-- Validacion -->
        @error('precio')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <br>

        <label for="existencias">Existencias:</label> <br>
        <input type="number" name="existencias" min="0" value="{{ isset($producto) ? $producto->existencias : old('existencias') }}">
         <br>

        <!-- Validacion -->
        @error('existencias')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <br>

        <label for="categoria">Categoria</label> <br>
        <select name="categoria" id="categoria">
            <option value="Vino" {{ isset($producto) && $producto->categoria == 'Vino' ? 'selected' :'' }}>Vino</option>
            <option value="Tequila" {{ isset($producto) && $producto->categoria == 'Tequila' ? 'selected' :'' }}>Tequila</option>
            <option value="Cerveza" {{ isset($producto) && $producto->categoria == 'Cerveza' ? 'selected' :'' }}>Cerveza</option>
            <option value="Otra" {{ isset($producto) && $producto->categoria == 'Otra' ? 'selected' :'' }}>Otra</option>
        </select>
        <br> <br>
        <input type="submit" value="Guardar">
    </form>
</x-layout>
