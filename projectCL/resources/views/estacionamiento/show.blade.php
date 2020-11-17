@extends('adminlte::page')

@section('title', 'Estacionamiento')

@section('content_header')
    <h1>Estacionamiento</h1>

@stop

@section('content')
    <div class="row">
      <div class="col-12"> 
        <a href="{{url('/estacionamiento/')}}" class="btn btn-primary btn-lg " >Volver</a>
        
        
      </div>
    </div>
    <br>
    <div class="card">
              <div class="card-header">
                <h3 class="card-title">Estacionamiento</h3>


              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 700px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                        <th>ID estacionamiento</th>
                        <th>ID Propietario</th>
                        <th>Numero</th>                                         

                    </tr>
                  </thead>
                  <tbody>
                   <tr> 
                    <td>{{$datosVERMAS->ID_est}}</td>
                    <td>{{$datosVERMAS->ID_prop}}</td>
                    <td>{{$datosVERMAS->Numero}}</td>                   
                   
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