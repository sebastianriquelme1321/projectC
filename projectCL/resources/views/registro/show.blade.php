@extends('adminlte::page')

@section('title', 'Registros')

@section('content_header')
    <h1>Registros</h1>

@stop

@section('content')
    <div class="row">
      <div class="col-12"> 
        <a href="{{url('/registro/')}}" class="btn btn-primary btn-lg " >Volver</a>
        
        
      </div>
    </div>
    <br>
    <div class="card">
              <div class="card-header">
                <h3 class="card-title">Registros</h3>


              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 700px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                        <th>ID Registro</th>
                        <th>ID Condominio</th>
                        <th>Asunto</th>
                        <th>Monto</th>
                        <th>Fecha</th>
                        <th>Detalle</th>                                       

                    </tr>
                  </thead>
                  <tbody>
                   <tr> 
                    
                        <td>{{$datosVERMAS->ID_registro}}</td>
                        <td>{{$datosVERMAS->ID_condominio}}</td>
                        <td>{{$datosVERMAS->Asunto}}</td>
                        <td>{{$datosVERMAS->Monto}}</td>
                        <td>{{$datosVERMAS->Fecha_de_pago}}</td> 
                        <td>{{$datosVERMAS->Detalle}}</td>                
                   
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
