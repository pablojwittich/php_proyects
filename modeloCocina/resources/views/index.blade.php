@include('app')

<form class="d-flex" role="search" method="GET" action="{{route('index')}}">
  <input class="form-control me-2" type="text" name="nombre" placeholder="Buscar por nombre" aria-label="Buscar por nombre">
  <input class="form-control me-2" type="text" name="apellido" placeholder="Buscar por apellido" aria-label="Buscar por apellido">
  <button class="btn btn-outline-success" type="submit">Buscar</button>
</form>

<h2 style="text-align: center">Clientes disponibles</h2>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Legajo</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Pin</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($clientes as $cliente)
    <tr>
        <td>{{$cliente->legajo}}</td>
        <td>{{$cliente->nombre}}</td>
        <td>{{$cliente->apellido}}</td>
        <td>{{$cliente->uuid}}</td>
    </tr>
    @endforeach

  </tbody>
</table>