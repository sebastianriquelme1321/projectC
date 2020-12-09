@extends('adminlte::page')

@section('title', 'Registros')

@section('content_header')
    <h1>Registros de gastos del Condominio</h1>

@stop

@section('content')
<div class="row">
  <div class="col-12"> 
    <a href="{{url('/home/')}}" class="btn btn-primary btn-lg " >Volver</a>
  </div>
</div>
<br>
    <div class="card">

              <div class="card-header">
                <h3 class="card-title">Gastos</h3>
              </div>

              <div class="card-body table-responsive p-0" style="height: 700px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>Asunto</th>
                        <th>Monto</th>
                        <th>Detalle</th>           
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($registros as $registro)
                    <tr>
                      <td>{{$registro->Fecha_de_pago}}</td>
                        <td>{{$registro->Asunto}}</td>
                        <td>{{$registro->Monto}}</td>
                        <td>{{$registro->Detalle}}</td>   
                    </tr>
                 @endforeach
                  </tbody>
                </table>
              </div>
            </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop