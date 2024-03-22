@include('app')

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<form action="{{ route('updateOrden', ['id' => $cliente->id]) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <h2 style="text-align: center">Actualizar cliente</h2>
    <div class="mb-3">
        <label for="legajo" class="form-label">Legajo</label>
        <input type="number" class="form-control" id="legajo" name="legajo" placeholder="Legajo" value="{{ $cliente->legajo }}">
    </div>
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="{{ $cliente->nombre }}">
    </div>
    <div class="mb-3">
        <label for="apellido" class="form-label">Apellido</label>
        <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido" value="{{ $cliente->apellido }}">
    </div>
    <div class="mb-3">
        <label for="beneficios" class="form-label">Beneficios</label>
        <select class="form-select" multiple aria-label="Multiple select example" name="beneficios[]" id="beneficios">
            @foreach ($benefActivos as $benefActivo)
                <option value="{{ $benefActivo->id }}" {{ in_array($benefActivo->id, $cliente->beneficios->pluck('id')->toArray()) ? 'selected' : '' }}>{{ $benefActivo->nombre_beneficio }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <button class="btn btn-primary" type="submit">Actualizar</button>
    </div>
</form>
