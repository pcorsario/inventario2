@extends('adminlte::page')
@section('title', __('Reporte de Inventario'))
@section('content')

<div class="container">
  <div class="row">
    <div class="col">
      <div class="card" style="width: 40rem;">
          <!-- <img src="{{ asset('images/sede.jpg')}}" height="200" class="card-img-top" alt="..."> -->
          <div class="card-body">
            <div class="row">
            <h5 class="card-title">GENERADOR DE REPORTES</h5>
            </div>
            <form action="{{route('inventario-pdf.store')}}" method="POST">
            @csrf
          <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Fecha Inicial</label>
            <input type="date" name="fecini" class="form-control"required />  
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Fecha Final</label>
            <input type="date" name="fecfin" class="form-control" required/>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Sede</label>
            <select name="buscarporsede" class="form-control" >
              <option value="">Seleccione una Sede</option>
              @foreach($sedes as $sede)
              <option value="{{ $sede->id }}">{{ $sede->nom_sede }}</option>
              @endforeach    
              </select>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Departamento</label>
            <select name="buscarpordepartamento" class="form-control" >
              <option value="">Seleccione un Departamento</option>
              @foreach($departamentos as $departamento)
              <option value="{{ $departamento->id }}">{{ $departamento->nombre_departamento }}</option>
              @endforeach    
              </select>
          </div>

          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Estado</label>
            <select name="buscarporestado" class="form-control">
              <option value="">Seleccione un Estado</option>
              @foreach($estados as $condicion)
              <option value="{{ $condicion->id }}">{{ $condicion->condicion}}</option>
              @endforeach    
              </select>
          </div>


          <div class="mb-3">
            <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Buscar</button>
          </div>
</form>
    

  </div>
</div>
</div>







  </div>
</div>
@endsection