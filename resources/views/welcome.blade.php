@extends('layouts.app')
@section('title', __('ITSJ'))
@section('content')
<div class="container" style="background-image: url('{{ asset('images/foto.jpg')}}'); width: 100%; height: 100vh; ">
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header"><h5><span class="text-center fa fa-home"></span> @yield('title')</h5></div>
            <div class="card-body">
              <h5>  
            @guest
				
				
			SISTEMA DE GESTION DE INVENTARIO DEL INSTITUTO SUPERIOR TECNOLOGICO JAPÓN ROLANDO CASTRO
                
			@else
					Hi {{ Auth::user()->name }}, Welcome back to {{ config('app.name', 'Laravel') }}.
            @endif	
				</h5>
                <!-- <img src="{{ asset('images/foto.jpg')}}" height="200" class="card-img-top" alt="...">  -->
            </div>
        </div>
    </div>
</div>
</div>
@endsection