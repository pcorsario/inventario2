@extends('adminlte::page')
@section('title', __('Usuarios'))
@section('content')
<div class="container-fluid">
<div class="row justify-content-center">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header"><h5><span class="text-center fa fa-home"></span> @yield('title')</h5>
        <a class="btn btn-warning" href="{{route('usuarios.create')}}">Nuevo</a>
        
        </div>
			<div class="card-body">
				
								
			<table class="table table-bordered table-sm">
						<thead class="thead">
							<tr> 
								<td>#</td> 
								<th>Nombre</th>
								<th>E-mail</th>
								<th>Rol</th>
							
								<td>ACTIONS</td>
							</tr>
						</thead>
						<tbody>
							@foreach($usuarios as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td>{{ $row->name }}</td>
								<td>{{ $row->email}}</td>
								<td>
                                    @if(!empty($row->getRoleNames()))
                                        @foreach($row->getRoleNames() as $rolName)
                                        <button class="btn btn-warning">{{$rolName}}</button>
                                        @endforeach

                                    @endif
                                </td>
								<td width="90">
								<div class="btn-group">
									<button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Actions
									</button>
									<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item"href='{{route('usuarios.edit',$row->id)}}'><i class="fa fa-edit"></i> Edit </a>							 
                                    {!! Form::open(['method'=>'DELETE', 'route'=>['usuarios.destroy',$row->id],'style'=>'display:inline']) !!}
                                        {!! Form::submit('Borrar',['class'=>'dropdown-item']) !!}
                                    {!! Form::close() !!}
                                </div>
								</div>
								</td>
							@endforeach
						</tbody>
					</table>
                    {{ $usuarios->links() }}							
			</div>
		</div>
	</div>
</div>
</div>
@endsection