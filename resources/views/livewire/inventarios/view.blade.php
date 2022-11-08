@section('title', __('Inventarios'))
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<div class="float-left">
							<h4><i class="fab fa-laravel text-info"></i>
							Inventario Listing </h4>
						</div>
						<div wire:poll.60s>
							<code><h5>{{ now()->format('H:i:s') }} UTC</h5></code>
						</div>
						@if (session()->has('message'))
						<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
						@endif
						<div>
							<input wire:model='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Search Inventarios">
						</div>
						<div class="btn-group">
								
									<a  href="{{ url('/inventariog-pdf') }}"  class="btn btn-warning" ><i class="fas fa-file-pdf"></i> Reporte GENERAL </a>   
									<a  href="{{ url('/inventario-pdf/create') }}"  class="btn btn-danger" ><i class="fas fa-file-pdf"></i> Reporte PDF </a>   
									<a  href="{{ url('/inventario-excel/export') }}"  class="btn btn-success" ><i class="fas fa-file-pdf"></i> Excel </a>   
								</div>
						<div class="btn btn-sm btn-info" data-toggle="modal" data-target="#createDataModal">
						<i class="fa fa-plus"></i>  Add Inventarios
						</div>
					</div>
				</div>
				
				<div class="card-body">
						@include('livewire.inventarios.create')
						@include('livewire.inventarios.update')
				<div class="table-responsive">
					<table class="table table-bordered table-sm">
						<thead class="thead">
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
								
								<td>ACTIONS</td>
							</tr>
						</thead>
						<tbody>
							@foreach($inventarios as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td>{{ $row->fecha_inventario }}</td>
								<td>{{ $row->hora_inventario }}</td>
								<td>{{ $row->producto->nombre_producto}}-{{ $row->producto->codigo_producto}}</td>
								<td>{{ $row->condicion->condicion }}</td>
								<td>{{ $row->sede->nom_sede }}</td>
								<td>{{ $row->planta->nom_planta }}</td>
								<td>{{ $row->departamento->nombre_departamento }}</td>
								<td>{{ $row->user->name }}</td>
							
								<td width="90">
								<div class="btn-group">
									<button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Actions
									</button>
									<div class="dropdown-menu dropdown-menu-right">
									<a data-toggle="modal" data-target="#updateModal" class="dropdown-item" wire:click="edit({{$row->id}})"><i class="fa fa-edit"></i> Edit </a>							 
									<a class="dropdown-item" onclick="confirm('Confirm Delete Inventario id {{$row->id}}? \nDeleted Inventarios cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})"><i class="fa fa-trash"></i> Delete </a>   
									</div>
								</div>
								</td>
							@endforeach
						</tbody>
					</table>						
					{{ $inventarios->links() }}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
