@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
    <form action="{{url('/condominio')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <section class="content">
            <div class="row">
              <div class="col-md-6">
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title"></h3>
                  </div>
                  <div class="card-body" style="display: block;">
                    <div class="form-group">
                      <label for="Region">{{'Region'}}</label>
                      <input type="text" name="Region" id="Region" value="" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="Ciudad">{{'Ciudad'}}</label>
                      <input type="text" name="Ciudad"id="Ciudad" value="" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="Calle">{{'Calle'}}</label>
                        <input type="text" name="Calle"id="Calle" value="" class="form-control" >
                      </div>
                    <div class="form-group">
                        <label for="Numero">{{'Numero'}}</label>
                        <input type="text" name="Numero"id="Numero" value="" class="form-control" 
                    </div>
                    <div class="form-group">
                        <label for="ID_ad">{{'ID_ad'}}</label>
                        <input type="text" name="ID_ad"id="ID_ad" value="" class="form-control" 
                    </div>
                    <div class="form-group">
                        <label for="Rut_ad">{{'Rut_ad'}}</label>
                        <input type="text" name="Rut_ad"id="Rut_ad" value="" class="form-control" 
                    </div>
                    <div class="form-group">
                        <label for="Ver_ad">{{'Ver_ad'}}</label>
                        <input type="text" name="Ver_ad"id="Ver_ad" value="" class="form-control" 
                    </div>
                    <div class="form-group">
                        <label for="Calle">{{'Calle'}}</label>
                        <input type="text" name="Calle"id="Calle" value="" class="form-control" 
                    </div>
                    <div class="form-group">
                        <label for="Nombre">{{'Nombre'}}</label>
                        <input type="text" name="Nombre"id="Nombre" value="" class="form-control" 
                    </div>
                    <div class="form-group">
                        <label for="Apellido">{{'Apellido'}}</label>
                        <input type="text" name="Apellido"id="Apellido" value="" class="form-control" 
                    </div>
                    <div class="form-group">
                        <label for="Fono">{{'Fono'}}</label>
                        <input type="text" name="Fono"id="Fono" value="" class="form-control" 
                    </div>
                    <div class="form-group">
                        <label for="Correo">{{'Correo'}}</label>
                        <input type="text" name="Correo"id="Correo" value="" class="form-control" 
                    </div>
                    <div class="form-group">
                        <label for="Password">{{'Password'}}</label>
                        <input type="text" name="Password"id="Password" value="" class="form-control" 
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
                <a href="#" class="btn btn-secondary">Cancel</a>
                <input type="submit" value="Agregar" class="btn btn-success float-right">
              </div>
            </div>
          </section>
    </form>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
