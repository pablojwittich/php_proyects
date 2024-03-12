@include('app')

<div class="container">
  <!-- Content here -->
<div class="card">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <table class="table">
        <thead>
          <tr>
            <th>id</th>
            <th scope="col">Legajo</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th>Beneficio</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>{{$cliente->id}}</td>
            <td>{{$cliente->legajo}}</td>
            <td>{{$cliente->nombre}}</td>
            <td>{{$cliente->apellido}}</td>
          </tr>

        </tbody>
      </table>
    </div>
</div>
</div>