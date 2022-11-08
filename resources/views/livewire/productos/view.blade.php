@section('title', __('Productos'))
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<div class="float-left">
							<h4><i class="fab fa-laravel text-info"></i>
							Lista de Bienes'</h4>
						</div>
						<div wire:poll.60s>
							<code><h5>{{ now()->format('H:i:s') }} UTC</h5></code>
						</div>
						@if (session()->has('message'))
						<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
						@endif
						<div>
							<input wire:model='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Search Productos">
						</div>
						@can('crear-producto')
						<div class="btn btn-sm btn-info" data-toggle="modal" data-target="#createDataModal">
						<i class="fa fa-plus"></i>  Add Productos
						</div>
						@endcan
					</div>
				</div>
				
				<div class="card-body">
						@include('livewire.productos.create')
						@include('livewire.productos.update')
				<div class="table-responsive">
					<table class="table table-bordered table-sm">
						<thead class="thead">
							<tr> 
								<td>#</td> 
								<th>Codigo Producto</th>
								<th>Nombre Producto</th>
								<th>Fecha Compra</th>
								@can('ver-precio')
								<th>Precio</th>
								@endcan
								<th>Caracteristicas</th>
								<th>Categoria ID</th>
								@can('crear-producto')
								<td>ACTIONS</td>
								@endcan
							</tr>
						</thead>
						<tbody>
							@foreach($productos as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td>{{ $row->codigo_producto }}</td>
								<td>{{ $row->nombre_producto }}</td>
								<td>{{ $row->fecha_compra }}</td>
								@can('ver-precio')
								<td>{{ $row->precio }}</td>
								@endcan
								<td>{{ $row->caracteristicas }}</td>
								<td>
									categorias
								</td>
								@can('crear-producto')
								<td width="90">
								<div class="btn-group">
									<button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Actions
									</button>
									<div class="dropdown-menu dropdown-menu-right">
									<a data-toggle="modal" data-target="#updateModal" class="dropdown-item" wire:click="edit({{$row->id}})"><i class="fa fa-edit"></i> Edit </a>							 
									<a class="dropdown-item" onclick="confirm('Confirm Delete Producto id {{$row->id}}? \nDeleted Productos cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})"><i class="fa fa-trash"></i> Delete </a>   
									</div>
								</div>
								</td>
								@endcan
							@endforeach
						</tbody>
					</table>						
					{{ $productos->links() }}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
