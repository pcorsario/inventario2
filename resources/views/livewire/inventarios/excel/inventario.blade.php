<table>
    <thead>
    <tr>
    <td>#</td> 
								<th>Fecha Inventario</th>
								<th>Hora Inventario</th>
								<th>Producto Id</th>
								<th>Condicion Id</th>
								<th>Sede Id</th>
								<th>Planta Id</th>
								<th>Departamento Id</th>
								<th>User Id</th>
								
    </tr>
    </thead>
    <tbody>
    @foreach($inventarios as $inventario)
        <tr>
        <td>{{ $loop->iteration }}</td> 
								<td>{{ $inventario->fecha_inventario }}</td>
								<td>{{ $inventario->hora_inventario }}</td>
								<td>{{ $inventario->producto->nombre_producto}}-{{ $inventario->producto->codigo_producto}}</td>
								<td>{{ $inventario->condicion->condicion }}</td>
								<td>{{ $inventario->sede->nom_sede }}</td>
								<td>{{ $inventario->planta->nom_planta }}</td>
								<td>{{ $inventario->departamento->nombre_departamento }}</td>
								<td>{{ $inventario->user->name }}</td>
        </tr>
    @endforeach
    </tbody>
</table>