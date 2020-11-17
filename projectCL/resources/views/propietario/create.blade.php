@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
    <form action="{{url('/propietarios')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <section class="content">
            <div class="row">
              <div class="col-md-6">
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">General</h3>
      
                   
                  </div>
                  <div class="card-body" style="display: block;">
                    <div class="form-group">
                      <label for="Nombre">{{'Nombre Completo'}}</label>
                      <input type="text" name="Nombre" id="Nombre" value="" class="form-control">
                    </div>                   
                    <div class="form-group">
                      <label for="Rut">{{'Rut'}}</label>
                      <p style="color:#5a5a5ae7";>Formato:12345678-9</p>
                      
                      <input type="text" name="Rut_prop"id="Rut_prop" value="" class="form-control"
                  </div>
              
                    <div class="form-group">
                        <label for="Correo">{{'Correo'}}</label>
                        <input type="text" name="Correo"id="Correo" value="" class="form-control" 
                    </div>
                    <div class="form-group">
                        <label for="Fono">{{'Fono'}}</label>
                        <input type="text" name="Fono"id="Fono" value="" class="form-control" >
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
                <input type="submit" value="Agregar" class="btn btn-success float-right">
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

