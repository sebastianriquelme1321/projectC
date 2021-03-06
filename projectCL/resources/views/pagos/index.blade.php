@extends('adminlte::page')

@section('title', 'Pagos')

@section('content_header')
    <h1>Pagos</h1>

@stop

@section('content')
    <div class="row">
      <div class="col-12"> 
        <a href="{{url('/pagos/create')}}" class="btn btn-primary btn-lg float-right" >Agregar</a>
        
        
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
                        <th>ID Dept</th>
                        <th>Monto</th>                        
                        <th>Fecha de Pago</th>                      
                                  
 
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($pagos as $pago)
                        <tr>
                         
                            <td>{{$pago->ID_pagos}}</td>
                            <td>{{$pago->ID_dept}}</td>
                            <td>{{$pago->Monto}}</td>                            
                            <td>{{$pago->Fecha_de_pago}}</td>                         
       
                        <td>
                          <form method="post" action="{{url('/pagos/'.$pago->ID_pagos)}}">
                          {{csrf_field() }}
                          {{method_field('GET')}}
                          <button type="submit" class="btn btn-block btn-success">Ver mas</button>
          
                          </form>
                        </td>
                      <td>
                        <a href="{{url('/pagos/'.$pago->ID_pagos.'/edit')}}">
                         <button type="submit" class="btn btn-block btn-warning" onclick="return confirm('Editar');">Editar</button>
                        </a>
        
                      </td>
                      <td>
                        <form method="post" action="{{url('/pagos/'.$pago->ID_pagos)}}">
                        {{csrf_field() }}
                        {{method_field('DELETE')}}
                        <button type="submit" class="btn btn-block btn-danger" onclick="return confirm('Borrar');">Borrar</button>
            
                        </form>
                    </td>

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
