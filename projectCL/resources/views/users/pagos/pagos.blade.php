@extends('adminlte::page')

@section('title', 'Pagos')

@section('content_header')
    <h1>Pagos</h1>

@stop

@section('content')
    
    <div class="card">
              <div class="card-header">
                <h3 class="card-title">Pagos</h3>


              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 700px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>                        
                        <th>Departamento</th>
                        <th>Monto</th>                        
                        <th>Fecha de Pago</th>                      
                                  
 
                    </tr>
                  </thead>
                  <tbody>
                    @if($dptomostrar!="no hay")

                    @foreach($viewpagos as $pago)
                       
                    @foreach($dptomostrar as $muestro)

                     @if($muestro->ID_dept==$pago->ID_dept)
                     <tr>
                        <td>{{$muestro->Numero}} - {{ $muestro->Bloque}}</td>                           
                        <td>{{$pago->Monto}}</td>                            
                        <td>{{$pago->Fecha_de_pago}}</td>                         
   
                    <td>
                      <form method="post" action="{{url('user/pagos/'.$pago->ID_pagos)}}">
                      {{csrf_field() }}
                      {{method_field('GET')}}
                      <button type="submit" class="btn btn-block btn-success">Ver mas</button>
      
                   

               </tr>
                         
                     @endif
                        
                    @endforeach
                 @endforeach
                  </tbody>
                        
                    @endif
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
