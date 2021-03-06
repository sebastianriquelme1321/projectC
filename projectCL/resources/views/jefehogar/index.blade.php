@extends('adminlte::page')

@section('title', 'Jefe de Hogar')

@section('content_header')
    <h1>Jefe de Hogar</h1>

@stop

@section('content')
    <div class="row">
      <div class="col-12"> 
        <a href="{{url('/jefe_de_hogar/create')}}" class="btn btn-primary btn-lg float-right" >Agregar</a>
        
        
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
                        <th>Rut Jefe</th>                        
                        <th>Nombre</th>
                        <th>Apellido</th>
                                   
 
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($jefe_de_hogars as $jefe_de_hogar)
                    <tr>         
            
                        <td>{{$jefe_de_hogar->ID_jefe}}</td>                        
                        <td>{{$jefe_de_hogar->Rut_jefe}}</td>                        
                        <td>{{$jefe_de_hogar->Nombre}}</td>
                        <td>{{$jefe_de_hogar->Apellido}}</td>
                                             
                        
                        <td>
                          <form method="post" action="{{url('/jefe_de_hogar/'.$jefe_de_hogar->ID_jefe)}}">
                          {{csrf_field() }}
                          {{method_field('GET')}}
                          <button type="submit" class="btn btn-block btn-success">Ver mas</button>
          
                          </form>
                      </td>
                      <td>
                        <a href="{{url('/jefe_de_hogar/'.$jefe_de_hogar->ID_jefe.'/edit')}}">
                         <button type="submit" class="btn btn-block btn-warning" onclick="return confirm('Editar');">Editar</button>
                        </a>
        
                      </td>
                      <td>
                        <form method="post" action="{{url('/jefe_de_hogar/'.$jefe_de_hogar->ID_jefe)}}">
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