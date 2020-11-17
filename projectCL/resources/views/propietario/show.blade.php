@extends('adminlte::page')

@section('title', 'Propietarios')

@section('content_header')
    <h1>Propietarios</h1>

@stop

@section('content')
    <div class="row">
      <div class="col-12"> 
        <a href="{{url('/propietarios/')}}" class="btn btn-primary btn-lg " >Volver</a>
        
        
      </div>
    </div>
    <br>
    <div class="card">
              <div class="card-header">
                <h3 class="card-title">Propietarios</h3>


              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 700px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                        <th>Nombre</th>                        
                        <th>Rut</th>                        
                        <th>fono</th>
                        <th>Correo</th>
                        <th>Razon Social</th>                      

                    </tr>
                  </thead>
                  <tbody>
                   <tr> 
                    <td>{{$datosVERMAS->Nombre}}</td>                    
                    <td>{{$datosVERMAS->Rut_prop}}</td>                    
                    <td>{{$datosVERMAS->Fono}}</td>
                    <td>{{$datosVERMAS->Correo}}</td>
                    <td>{{$datosVERMAS->Razon_Social}}</td>
                   
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
