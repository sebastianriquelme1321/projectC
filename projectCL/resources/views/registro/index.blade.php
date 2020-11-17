@extends('adminlte::page')

@section('title', 'Registros')

@section('content_header')
    <h1>Registros</h1>

@stop

@section('content')
    <div class="row">
      <div class="col-12"> 
        <a href="{{url('/registro/create')}}" class="btn btn-primary btn-lg float-right" >Agregar</a>
        
        
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
                        
                        <td>
                          <form method="post" action="{{url('/registro/'.$registro->ID_registro)}}">
                          {{csrf_field() }}
                          {{method_field('GET')}}
                          <button type="submit" class="btn btn-block btn-success">Ver mas</button>
          
                          </form>
                      </td>
                      <td>
                        <a href="{{url('/registro/'.$registro->ID_registro.'/edit')}}">
                         <button type="submit" class="btn btn-block btn-warning" onclick="return confirm('Editar');">Editar</button>
                        </a>
        
                      </td>
                      <td>
                        <form method="post" action="{{url('/registro/'.$registro->registro)}}">
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