
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Reporte!</title>

<style type="text/css">
    * {
        font-family: Verdana, Arial, sans-serif;
    }
    table{
        font-size: x-small;
    }
    tfoot tr td{
        font-weight: bold;
        font-size: x-small;
    }
    .gray {
        background-color: lightgray
    }
</style>

</head>
<body>

  <table width="100%">
    <tr>
        <td valign="top">
        <img src="{{asset('vendor/adminlte/dist/img/w.png')}}" alt="" width="250"/>
        <!-- <img src="https://itsjapon.edu.ec/wp-content/uploads/2022/02/LOGO-HERALDICO-color1.png" alt="" width="100"/> -->
        </td>
        
        <td align="right">
            <h3>INSTITUTO SUPERIOR TECNOLOGICO JAPON</h3>
            <pre>
            TARJETA DE ACTIVOS REGISTRADOS POR SEDE
                
                                
                
            </pre>
        </td>
    </tr>

  </table>

  <table width="100%">
    <tr>
        <td><strong>Fecha:</strong> <?php echo now(); ?></td>
        <!-- <td><strong>To:</strong> Linblum - Barrio Comercial</td> -->
    </tr>

  </table>

  <br/>

  <table width="100%"  border=1 cellspacing=0 cellpadding=2 bordercolor="666633">
    <thead>
      <tr>
        <td align="left" WIDTH="50" 
	 ><strong>Año:</strong> </td>
        <td>2022</td>
     
      </tr>
      @isset($sedes)
    <tr>
    <td align="left"><strong>Sede:</strong></td>
    <td>
    
      
    {{$sedes}}
</td>
    
  
 
    </tr>
    @endisset
    @isset($departamentos)
<tr>
<td align="left"><strong>Departamento:</strong></td>
<td>

      
    {{$departamentos}}
  </td>
</tr>
@endisset




@isset($estados)
<tr>
<td align="left"><strong>Estado:</strong></td>
<td>

      
    {{$estados}}
  </td>
</tr>
@endisset
        
    </thead>
  </table>
<br>


<table width="100%" border=1 cellspacing=0 cellpadding=2 bordercolor="666633">
    <th>Fecha Inv.</th>
    <th>Usuario</th>
    <th>Codigo</th>
    <th>Nombre de Producto</th>
    <th>Planta</th>
    <th>Departamento</th>
    <th>Estado</th>
    @foreach($inventarios as $row)
							<tr>
							
              <td>{{ $row->fecha_inventario }}</td>
                <td>{{ $row->user->name }}</td>
								<td>{{ $row->producto->codigo_producto}}</td>
								<td>{{ $row->producto->nombre_producto}}</td>
                <td>{{ $row->planta->nom_planta }}</td>							
								<td>{{ $row->departamento->nombre_departamento }}</td>
                <td>{{ $row->condicion->condicion }}</td>
								</tr>
							
    @endforeach
    
</table>


</body>
</html>