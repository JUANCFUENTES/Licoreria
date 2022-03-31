<x-layout>
<div style="text-align: center">
    <h1>Actualizar Stok</h1>

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

    <form action="/stock/{{ $producto->id }}/{{$sucursal->id}}" method="POST">
        @method('GET')

        @csrf
        <label for="producto">Nombre del producto:</label> <br>
        <input type="text" name="producto" value="{{ $producto->nombre }}" disabled>
        <br>

        <label for="sucursal">Sucursal:</label> <br>
        <input type="text" name="sucursal" value="{{ $sucursal->domicilio }}" disabled>
        <br>

        <label for="sucursal_id"></label>
        <input type="hidden" name="sucursal_id" value="{{ $sucursal->id }}">

         @foreach ($producto->sucursals as $data)
          @php
            if ($data->id == $sucursal->id) {
                $existencias= $data->pivot->existencias;
            }

          @endphp
         @endforeach

        <label for="existencias">Existencias</label> <br>
        <input type="number" name="existencias" value="{{ $existencias }}" min="0">
        <br>
        <!-- Validacion -->
        @error('existencias')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>

        <input type="submit" value="Guardar">

    </form>
    <br>
</div>

</x-layout>
