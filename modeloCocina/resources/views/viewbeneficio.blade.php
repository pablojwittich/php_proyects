@include('app')

<h2 style="text-align: center; color:#2994A7;">Beneficios Disponibles</h2>
<table class="table table-striped">
  <thead>
    <th scope="col">ID</th>
    <th scope="col">Nombres Beneficios</th>
  </thead>
  <tbody>
    @foreach ($beneficios as $beneficio)
      <tr>
        <td>{{$beneficio->id}}</td>
        <td>{{$beneficio->nombre_beneficio}}</td>
      </tr>
    @endforeach
      </tbody>
</table>


