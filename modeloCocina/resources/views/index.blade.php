@include('app')

<form class="d-flex" role="search" method="GET" action="{{route('index')}}">
  <input class="form-control me-2" type="text" name="nombre" placeholder="Buscar por nombre" aria-label="Buscar por nombre">
  <input class="form-control me-2" type="text" name="apellido" placeholder="Buscar por apellido" aria-label="Buscar por apellido">
  <input class="form-control me-2" type="number" name="legajo" placeholder="Buscar por legajo" aria-label="Buscar por legajo">
  <input class="form-control me-2" type="number" name="uuid" placeholder="Buscar por Pin" aria-label="Buscar por Pin">
  <input class="form-control me-2" type="text" name="beneficio" placeholder="Buscar por beneficios" aria-label="Buscar por beneficio">
  
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
            <th scope="col">Beneficios</th>
            <th scope="col">Editar</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clientes as $cliente)
        <tr>
            <td>{{ $cliente->legajo }}</td>
            <td>{{ $cliente->nombre }}</td>
            <td>{{ $cliente->apellido }}</td>
            <td>{{ $cliente->uuid }}</td>
            <td>
                @foreach ($cliente->beneficios as $beneficio)
                    {{ $beneficio->nombre_beneficio }}
                    @if (!$loop->last) {{-- Evita agregar coma al último beneficio --}}
                        ,
                    @endif
                @endforeach
            </td>
            <td>
                <button class="btn btn-outline-primary type="submit">Editar</button>
                <button class="btn btn-outline-success type="submit">Ver QR</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
