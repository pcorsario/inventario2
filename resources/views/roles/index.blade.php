@extends('adminlte::page')
@section('title', __('Dashboard'))
@section('content')
<div class="container-fluid">
<div class="row justify-content-center">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header"><h5><span class="text-center fa fa-home"></span> @yield('title')</h5></div>
			<div class="card-body">
				<h5>Hi <strong>{{ Auth::user()->name }},</strong> {{ __('You are logged in to ') }}{{ config('app.name', 'Laravel') }}</h5>
				</br> 
				<hr>
								
			<div class="row w-100">
					@can('crear-rol')
					<a href="{{ route('roles.create') }}" class="btn btn-warning">Nuevo</a>
                    @endcan
					<table class="table table-bordered table-sm">
						<thead class="thead">
							<tr> 

								<th>Rol</th>
							
								<td>ACTIONS</td>
							</tr>
						</thead>
						<tbody>
							@foreach($roles as $row)
							<tr>
								<td>{{ $row->name }}</td>
								<td>{{ $row->accion}}</td>

								<td width="90">
								<div class="btn-group">
									<button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Actions
									</button>
									<div class="dropdown-menu dropdown-menu-right">
									@can('editar-rol')
									<a class="dropdown-item" href="{{route('roles.edit',$row->id)}}"><i class="fa fa-edit"></i> Edit </a>		
									@endcan
									@can('borrar-rol')					 
                                    {!! Form::open(['method'=>'DELETE', 'route'=>['roles.destroy',$row->id],'style'=>'display:inline']) !!}
                                        {!! Form::submit('Borrar',['class'=>'dropdown-item']) !!}
                                    {!! Form::close() !!}
									@endcan
                                </div>
								</div>
								</td>
							@endforeach
						</tbody>
					</table>
                    {{ $roles->links() }}
				 </div>				
			</div>
		</div>
	</div>
</div>
</div>
@endsection