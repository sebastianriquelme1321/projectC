@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
    <form action="{{url('/departamento')}}" method="post" enctype="multipart/form-data">
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
                      <label for="ID_condominio">{{'ID_condominio'}}</label>
                      <input type="text" name="ID_condominio" id="ID_condominio" value="" class="form-control">
                    </div>

                    <div class="form-group">
                      <label for="ID_prop">{{'ID_prop'}}</label>
                      <input type="text" name="ID_prop"id="ID_prop" value="" class="form-control" >
                    </div>

                    <div class="form-group">
                        <label for="Numero">{{'Numero'}}</label>
                        <input type="text" name="Numero"id="Numero" value="" class="form-control" 
                    </div>

                    <div class="form-group">
                        <label for="Bloque">{{'Bloque'}}</label>
                        <input type="text" name="Bloque"id="Bloque" value="" class="form-control" >
                    </div>

                    <div class="form-group">
                        <label for="Password">{{'Password'}}</label>
                        <input type="text" name="Password"id="Password" value="" class="form-control" >
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