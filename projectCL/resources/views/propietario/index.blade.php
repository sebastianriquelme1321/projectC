@extends('adminlte::page')

@section('title', 'Propietarios')

@section('content_header')
    <h1>Propietarios</h1>

@stop

@section('content')
    <div class="row">
      <div class="col-12"> 
        <a href="{{url('/propietarios/create')}}" class="btn btn-primary btn-lg float-right" >Agregar</a>
        
        
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
                      <th>ID</th>
                      <th>Nombre</th>
                      <th>Apellido</th>
                      <th>Fono</th>
                    </tr>
                  </thead>
                  <tbody>
                 @foreach($propietarios as $propietario)
                   <tr> 
                        <td>{{$propietario->ID_prop}}</td>
                        <td>{{$propietario->Nombre}}</td>
                        <td>{{$propietario->Apellido}}</td>
                        <td>{{$propietario->Fono}}</td>
                        <td>
                          <form method="post" action="{{url('/propietarios/'.$propietario->ID_prop)}}">
                          {{csrf_field() }}
                          {{method_field('GET')}}
                          <button type="submit" class="btn btn-block btn-success">Ver mas</button>
          
                          </form>
                      </td>
                      <td>
                        <a href="{{url('/propietarios/'.$propietario->ID_prop.'/edit')}}">
                         <button type="submit" class="btn btn-block btn-warning" onclick="return confirm('Editar');">Editar</button>
                        </a>
        
                      </td>
                      <td>
                        <form method="post" action="{{url('/propietarios/'.$propietario->ID_prop)}}">
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
