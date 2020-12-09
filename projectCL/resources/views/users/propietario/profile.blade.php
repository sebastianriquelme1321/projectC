@extends('adminlte::page')

@section('title', 'Mi perfil')

@section('content_header')
    <h1>Mi Perfil</h1>

@stop

@section('content')
    <div class="row">
      <div class="col-12"> 
        <a href="{{url('/home/')}}" class="btn btn-primary btn-lg" >Volver</a>
      </div>
    </div>      
    <br>

        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <p class="profile-username text-center">{{$propietariob[0]->Nombre}}</p>
              <p class="text-muted text-center"> {{$propietariob[0]->Rut_prop}} </p>
            </div>
          </div>

          <div class="box box-primary">
  
            <div class="box-body">

              <hr>
              <strong><i class="fab fa-whatsapp margin-r-5"></i> Fono</strong>
              <p class="text-muted">{{$propietariob[0]->Fono}}</p>
              <hr>
              <strong><i class="fas fa-envelope margin-r-5"></i> Correo</strong>
              <p class="text-muted">{{auth()->user()->email}}</p>
              <hr>
              <strong><i class="fas fa-gavel margin-r-5"></i> Razon Social</strong>
              <p class="text-muted">{{$propietariob[0]->Razon_Social}}</p>

            </div>
          </div>
        </div>
        <br>

        @foreach($datosVERMAS as $datos)
                       
        @if($datos->id==auth()->user()->id)
       
        <div class="row">
          <div class="col-12"> 
             <a href="{{url('/user/profile/'.Crypt::encrypt($datos->ID_prop).'/edit')}}" class="btn btn-warning btn-lg" >Editar Datos</a>
          </div>
        </div> 
        
        @endif
       @endforeach


    {{--  <div class="card">
              <div class="card-header">
                <h3 class="card-title"> Mis Datos </h3>

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
                        <a href="{{url('/user/profile/'.Crypt::encrypt($datos->ID_prop).'/edit')}}">
                         <button type="submit" class="btn btn-block btn-warning" onclick="return confirm('Editar');">Editar</button>
                        </a>

                    </td>

                    @endif
                   @endforeach
                   
                   </tr>
                </table>
            </div>
            <!-- /.card-body -->
          </div>  --}}

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
