@extends('adminlte::page')

@section('title', 'Condominio')

@section('content_header')
    <h1>Condominio</h1>

@stop

@section('content')
    <div class="row">
      <div class="col-12"> 
        <a href="{{url('/condominio/')}}" class="btn btn-primary btn-lg " >Volver</a>
        
        
      </div>
    </div>
    <br>
    <div class="card">
              <div class="card-header">
                <h3 class="card-title">Condominio</h3>


              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 700px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                        <th>ID</th>
                        <th>Region</th>
                        <th>Ciudad</th>
                        <th>Calle</th>
                        <th>Número</th>                        
                        <th>Rut Admin</th>                        
                        <th>Nombre Admin</th>
                        <th>Apellido Admin</th>
                        <th>Fono Admin</th>
                        <th>Correo Admin</th>                                         

                    </tr>
                  </thead>
                  <tbody>
                   <tr> 
                    <td>{{$datosVERMAS->ID_condominio}}</td>
                    <td>{{$datosVERMAS->Region}}</td>
                    <td>{{$datosVERMAS->Ciudad}}</td>
                    <td>{{$datosVERMAS->Calle}}</td>
                    <td>{{$datosVERMAS->Numero}}</td>                    
                    <td>{{$datosVERMAS->Rut_ad}}</td>                    
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
