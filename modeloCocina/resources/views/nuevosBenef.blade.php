@include('app')

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<form action="{{ route('saveBenef') }}" method="post" enctype="multipart/form-data">
        @csrf

<h2 style="text-align: center">Crear un nuevo beneficio</h2>
    <div class="mb-3">
        <label for="nombre beneficio" class="form-label">Nombre beneficio</label>
        <input type="text" class="form-control" id="nuevoBenef" name="nuevoBenef" placeholder="Nuevo Beneficio">
    </div>
    <div>
        <button class="btn btn-primary" type="submit">Guardar</button>
    </div>
</form>