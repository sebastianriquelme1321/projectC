@extends('adminlte::page')

@section('title', 'Pagos')

@section('content_header')
    <h1>Pagos</h1>

@stop

@section('content')
    <div class="row">
      <div class="col-12"> 
        <a href="{{url('/pagos/')}}" class="btn btn-primary btn-lg " >Volver</a>
        
        
      </div>
    </div>
    <br>
    <div class="card">
              <div class="card-header">
                <h3 class="card-title">Pagos</h3>


              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 700px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                        <th>ID Pago</th>
                        <th>Departamento</th>
                        <th>Monto</th>
                        <th>Monto Deuda</th>
                        <th>Fecha de Pago</th>
                        <th>Mes de Pago</th>
                        <th>Comprobante</th>
                        <th>Detalle</th>                                         

                    </tr>
                  </thead>
                  <tbody>
                   <tr> 
                    <td>{{$datosVERMAS->ID_pagos}}</td>
                    @foreach ($departamentos as $departamento)
                                @if ($datosVERMAS->ID_dept == $departamento->ID_dept)
                                <td>{{$departamento->Numero}} - {{$departamento->Bloque}}</td>
                                @endif
                            @endforeach
                    <td>{{$datosVERMAS->Monto}}</td>
                    <td>{{$datosVERMAS->Monto_deuda}}</td>
                    <td>{{$datosVERMAS->Fecha_de_pago}}</td>
                    <td>{{$datosVERMAS->Mes_de_pago}}</td> 
                    <td><img src="{{asset('storage').'/'.$datosVERMAS->ComprobanteIMG}}" alt="" width="200"></td>
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