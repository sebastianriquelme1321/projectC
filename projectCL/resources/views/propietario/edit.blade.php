@extends('adminlte::page')

@section('title', 'Editar Propietario')

@section('content_header')
   
  <form action="{{url('/propietarios/'.$propietario->ID_prop)}}" method="post" enctype=" multipart/form-data">
        {{csrf_field()}}
        {{method_field('PATCH')}}
        <section class="content">
            <section class="content">
                <div class="row">
                  <div class="col-md-6">
                    <div class="card card-primary">
                      <div class="card-header">
                        <h3 class="card-title">Propietario {{$propietario->ID_prop}}</h3>
          
                       
                      </div>
                      <div class="card-body" style="display: block;">
                        <div class="form-group">
                          <label for="Nombre">{{'Nombre'}}</label>
                          <input type="text" name="Nombre" id="Nombre" value="{{$propietario->Nombre}}" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="Apellido">{{'Apellido'}}</label>
                          <input type="text" name="Apellido"id="Apellido" value="{{$propietario->Apellido}}" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label for="Fono">{{'Fono'}}</label>
                            <input type="text" name="Fono"id="Fono" value="{{$propietario->Fono}}" class="form-control" >
                          </div>
                       
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>
                  
                    <!-- /.card -->
                  </div>
                </div>
            <div class="row">
              <div class="col-12">
                <a href="{{url('/propietarios')}}" class="btn btn-secondary">Cancel</a>
                <input type="submit" value="Editar" class="btn btn-success float-right">
              </div>
            </div>
          </section>
    </form>
@stop

@section('content')
   
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
