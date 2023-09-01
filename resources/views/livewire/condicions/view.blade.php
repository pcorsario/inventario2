@section('title', __('Condicions'))
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<div class="float-left">
							<h4><i class="fab fa-laravel text-info"></i>
							Condicion Listing </h4>
						</div>
						<div wire:poll.60s>
							<code><h5>{{ now()->format('H:i:s') }} UTC</h5></code>
						</div>
						@if (session()->has('message'))
						<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
						@endif
						<div>
							<input wire:model='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Search Condicions">
						</div>
						@can('ver-rol')
						<div class="btn btn-sm btn-info" data-toggle="modal" data-target="#createDataModal">
						<i class="fa fa-plus"></i>  Add Condicions
						</div>
						@endcan
					</div>
				</div>
				
				<div class="card-body">
						@include('livewire.condicions.create')
						@include('livewire.condicions.update')
				<div class="table-responsive">
					<table class="table table-bordered table-sm">
						<thead class="thead">
							<tr> 
								<td>#</td> 
								<th>Condicion</th>
								<td>ACTIONS</td>
							</tr>
						</thead>
						<tbody>
							@foreach($condicions as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td>{{ $row->condicion }}</td>
								<td width="90">
								@can('ver-rol')
								<div class="btn-group">
									<button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Actions
									</button>
									<div class="dropdown-menu dropdown-menu-right">
									<a data-toggle="modal" data-target="#updateModal" class="dropdown-item" wire:click="edit({{$row->id}})"><i class="fa fa-edit"></i> Edit </a>							 
									<a class="dropdown-item" onclick="confirm('Confirm Delete Condicion id {{$row->id}}? \nDeleted Condicions cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})"><i class="fa fa-trash"></i> Delete </a>   
									</div>
								</div>
								@endcan
								</td>
							@endforeach
						</tbody>
					</table>						
					{{ $condicions->links() }}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
