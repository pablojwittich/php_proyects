@include('app')

<div class="container">
    <div>
        <div style="display: block; justify-content: center;align-items: center;" src="data:image/svg;base64,{{ $qrCode }}
        <div class="card-body">
            <h5 class="card-title">Detalles del Cliente</h5>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Legajo</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Beneficios</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $cliente->id }}</td>
                        <td>{{ $cliente->legajo }}</td>
                        <td>{{ $cliente->nombre }}</td>
                        <td>{{ $cliente->apellido }}</td>
                        <td>
                            @foreach ($cliente->beneficios as $beneficio)
                                {{ $beneficio->nombre_beneficio }}
                                @if (!$loop->last) {{-- Evita agregar coma al último beneficio --}}
                                    ,
                                @endif
                            @endforeach
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
