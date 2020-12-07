@extends('adminlte::page')

@section('title', 'Mi perfil')

@section('content_header')
    <h1>Perfil</h1>

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
                <h3 class="card-title"></h3>


              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 700px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                        <th>Nombre</th>                        
                        <th>Rut</th>                        
                        <th>Fono</th>
                        <th>Correo</th>
                        <th>Razon Social</th>      


                    </tr>
                  </thead>
                  <tbody>
                   <tr> 
                                  
                   @foreach($datosVERMAS as $datos)
                       
                    @if($datos->id==auth()->user()->id)
                    <td>{{$datos->Nombre}}</td>                    
                    <td>{{$datos->Rut_prop}}</td>                    
                    <td>{{$datos->Fono}}</td>
                    <td>{{auth()->user()->email}}</td>
                    <td>{{$datos->Razon_Social}}</td>                
                    <td>
                        <a href="{{url('/user/profile/'.$datos->ID_prop.'/edit')}}">
                         <button type="submit" class="btn btn-block btn-warning" onclick="return confirm('Editar');">Editar</button>
                        </a>
        
                    </td>
                        
                    @endif
                   @endforeach
                   
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
