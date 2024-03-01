@include('app')

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<form action="{{ route('saveCliente') }}" method="post" enctype="multipart/form-data">
        @csrf

<h2 style="text-align: center">Crear un nuevo cliente</h2>
    <div class="mb-3">
        <label for="legajo" class="form-label">Legajo</label>
        <input type="number" class="form-control" id="legajo" name="legajo" placeholder="Legajo">
    </div>
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
    </div>
    <div class="mb-3">
        <label for="apellido" class="form-label">Apellido</label>
        <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido">
    </div>
    <div>
        <select class="form-select" aria-label="Default select example" name="tipobeneficio" id="tipobeneficio" >
            <option selected="disableb">Elija beneficio</option>
        @foreach ($benefActivos as $benefActivo)
            <option value="{{$benefActivo->id}}">{{$benefActivo->nombre_beneficio}}</option>
        @endforeach
        </select>
    </div>
    <div>
        <button class="btn btn-primary" type="submit">Guardar</button>
    </div>
</form>