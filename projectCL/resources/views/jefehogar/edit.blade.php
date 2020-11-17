@extends('adminlte::page')

@section('title', 'Jefe de Hogar')

@section('content_header')
    <h1>Jefe de Hogar</h1>
    <form action="{{url('/jefe_de_hogar/'.$jefe_de_hogar->ID_jefe)}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        {{method_field('PATCH')}}
        <section class="content">
            <div class="row">
              <div class="col-md-6">
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">General</h3>
      
                   
                  </div>
                  <div class="card-body" style="display: block;">

                    <div class="form-group">
                      <label for="ID_dept">{{'ID dept'}}</label>
                      <input type="text" name="ID_dept"id="ID_dept" value="{{$jefe_de_hogar->ID_dept}}" class="form-control" >
                    </div>

                    <div class="form-group">
                        <label for="Rut_jefe">{{'Rut jefe'}}</label>
                        <input type="text" name="Rut_jefe"id="Rut_jefe" value="{{$jefe_de_hogar->Rut_jefe}}" class="form-control" 
                    </div>                
                    
                    <div class="form-group">
                        <label for="Nombre">{{'Nombre'}}</label>
                        <input type="text" name="Nombre"id="Nombre" value="{{$jefe_de_hogar->Nombre}}" class="form-control" 
                    </div>

                    <div class="form-group">
                        <label for="Apellido">{{'Apellido'}}</label>
                        <input type="text" name="Apellido"id="Apellido" value="{{$jefe_de_hogar->Apellido}}" class="form-control" 
                    </div>

                    <div class="form-group">
                        <label for="Fono">{{'Fono'}}</label>
                        <input type="text" name="Fono"id="Fono" value="{{$jefe_de_hogar->Fono}}" class="form-control" 
                    </div>

                    <div class="form-group">
                        <label for="Correo">{{'Correo'}}</label>
                        <input type="text" name="Correo"id="Correo" value="{{$jefe_de_hogar->Correo}}" class="form-control" 
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
                <a href="{{url('/jefe_de_hogar')}}" class="btn btn-secondary">Cancel</a>
                <input type="submit" value="Editar" class="btn btn-success float-right">
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