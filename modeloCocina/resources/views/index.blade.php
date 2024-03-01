@include('app')

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Legajo</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($clinetes as $cliente)
    <tr>
        <th scope="row">1</th>
        <td>{{$cliente->legajo}}</td>
        <td>{{$cliente->nombre}}</td>
        <td>{{$cliente->apellido}}</td>
    </tr>
    @endforeach

  </tbody>
</table>