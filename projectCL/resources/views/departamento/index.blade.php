@extends('adminlte::page')

@section('title', 'Departamento')

@section('content_header')
    <h1>Departamento</h1>

@stop

@section('content')
    <div class="row">
      <div class="col-12"> 
        <a href="{{url('/departamento/create')}}" class="btn btn-primary btn-lg float-right" >Agregar</a>
        
        
      </div>
    </div>
    <br>
    <div class="card">
              <div class="card-header">
                <h3 class="card-title">Departamento</h3>


              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 700px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                        <th>ID Depto</th>
                        <th>ID Condominio</th>
                        <th>ID Propietario</th>
                        <th>Bloque</th> 
                        <th>Numero</th>                                 
 
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($departamentos as $departamento)
                    <tr>
            
                        <td>{{$departamento->ID_dept}}</td>
                        <td>{{$departamento->ID_condominio}}</td>
                        <td>{{$departamento->ID_prop}}</td>
                        <td>{{$departamento->Bloque}}</td>  
                        <td>{{$departamento->Numero}}</td>                                          
                        
                        <td>
                          <form method="post" action="{{url('/departamento/'.$departamento->ID_dept)}}">
                          {{csrf_field() }}
                          {{method_field('GET')}}
                          <button type="submit" class="btn btn-block btn-success">Ver mas</button>
          
                          </form>
                      </td>
                      <td>
                        <a href="{{url('/departamento/'.$departamento->ID_dept.'/edit')}}">
                         <button type="submit" class="btn btn-block btn-warning" onclick="return confirm('Editar');">Editar</button>
                        </a>
        
                      </td>
                      <td>
                        <form method="post" action="{{url('/departamento/'.$departamento->ID_dept)}}">
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