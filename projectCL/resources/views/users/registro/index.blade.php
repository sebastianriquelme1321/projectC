@extends('adminlte::page')

@section('title', 'Registros')

@section('content_header')
    <h1>Registros</h1>

@stop

@section('content')
    
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
                        <th>Asunto</th>
                        <th>Monto</th>
                        <th>Fecha</th>
                        <th>Detalle</th>           
 
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($registros as $registro)
                    <tr>
                        
                        <td>{{$registro->ID_registro}}</td>
                        <td>{{$registro->Asunto}}</td>
                        <td>{{$registro->Monto}}</td>
                        <td>{{$registro->Fecha_de_pago}}</td>
                        <td>{{$registro->Detalle}}</td>                     
                        
                       

                   </tr>
                 @endforeach
                  </tbody>
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