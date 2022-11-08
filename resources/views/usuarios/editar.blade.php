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
				@if($errors->any())
			<div class="alert alert-dark alert-dismissible fade show" role="alert">
                <strong>Revise los campos</strong>
                @foreach($errors->all() as $error)
                    <span class="badge badge-danger">{{$error}}</span>
                @endforeach
                <button  type="button" class="close" data-dissmiss="alert" aria-label="close">
                    <span>&times;</span>
                </button>
            </div>					
				@endif
                
            {!! Form::model($user,['method'=>'PATCH','route'=>['usuarios.update',$user->id]]) !!}
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="name">Nombre</label>
                            {!! Form::text('name',null,array('class'=>'form-control'))!!}

                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="name">Email</label>
                            {!! Form::text('email',null,array('class'=>'form-control'))!!}

                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="name">Password</label>
                            {!! Form::text('password',null,array('class'=>'form-control'))!!}

                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="name">Confirmar Password</label>
                            {!! Form::text('confirm-password',null,array('class'=>'form-control'))!!}

                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="name">Roles</label>
                            {!! Form::select('roles[]',$roles,[],array('class'=>'form-control'))!!}

                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </div>
            {!! Form:: close() !!}
			</div>
		</div>
	</div>
</div>
</div>
@endsection