@extends('adminlte::page')

@section('title', 'Jefe de Hogar')

@section('content_header')
    <h1>Jefe de Hogar</h1>

@stop

@section('content')
    <div class="row">
      <div class="col-12"> 
        <a href="{{url('/jefe_de_hogar/')}}" class="btn btn-primary btn-lg " >Volver</a>
        
        
      </div>
    </div>
    <br>
    <div class="card">
              <div class="card-header">
                <h3 class="card-title">Jefe de Hogar</h3>


              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 700px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                        <th>ID Jefe</th>
                        <th>ID Depto</th>
                        <th>Rut Jefe</th>                        
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Fono</th>
                        <th>Correo</th>                                      

                    </tr>
                  </thead>
                  <tbody>
                   <tr> 
                    <td>{{$datosVERMAS->ID_jefe}}</td>
                    <td>{{$departamentos[$datosVERMAS->ID_dept-1]->Numero}} - {{$departamentos[$datosVERMAS->ID_dept-1]->Bloque}}</td>
                    <td>{{$datosVERMAS->Rut_jefe}}</td>                    
                    <td>{{$datosVERMAS->Nombre}}</td>
                    <td>{{$datosVERMAS->Apellido}}</td>
                    <td>{{$datosVERMAS->Fono}}</td>
                    <td>{{$datosVERMAS->Correo}}</td>                
                   
                   </tr>
                </table>
            </div>
            <!-- /.card-body -->
          </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
