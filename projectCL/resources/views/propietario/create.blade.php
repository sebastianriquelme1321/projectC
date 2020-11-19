@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
    <form action="{{url('/propietarios')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <section class="content">
            
          @if(count($errors)>0)
          <div class="alert alert-danger" role="alert">
            
            <ul>
              @foreach ($errors->all() as $error)    
              <li>{{$error}} </li>
              @endforeach
            </ul>

          </div>
          @endif
          
          <div class="row">
              <div class="col-md-6">
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">General</h3>
      
                   
                  </div>
                  <div class="card-body" style="display: block;">

                    <div class="form-group">
                      <label for="id">{{'ID USER'}}</label>
                      <input type="text" name="id" id="id" value="{{isset($propietario->id)?$propietario->id:old('id')}}" class="form-control {{$errors->has('id')?'is-invalid':''}}">
                    
                      {!! $errors->first('id','<div class="invalid-feedback"> :message</div>') !!}
                    
                    </div>  

                    <div class="form-group">
                      <label for="Nombre">{{'Nombre Completo'}}</label>
                      <input type="text" name="Nombre" id="Nombre" value="{{isset($propietario->Nombre)?$propietario->Nombre:old('Nombre')}}" class="form-control {{$errors->has('Nombre')?'is-invalid':''}}">
                    
                      {!! $errors->first('Nombre','<div class="invalid-feedback"> :message</div>') !!}
                    
                    </div>  


                    <div class="form-group">
                      <label for="Rut">{{'Rut'}}</label>
                      <p style="color:#5a5a5ae7";>Formato:12.345.678-9</p>
                      <input type="text" name="Rut_prop"id="Rut_prop" value="{{isset($propietario->Rut_prop)?$propietario->Rut_prop:old('Rut_prop')}}" class="form-control {{$errors->has('Rut_prop')?'is-invalid':''}}">
                      {!! $errors->first('Rut_prop','<div class="invalid-feedback"> :message</div>') !!}
                    </div>

              
                    <div class="form-group">
                        <label for="Correo">{{'Correo'}}</label>
                        <input type="text" name="Correo"id="Correo" value="{{isset($propietario->Correo)?$propietario->Correo:old('Correo')}}" class="form-control {{$errors->has('Correo')?'is-invalid':''}}"> 
                        {!! $errors->first('Correo','<div class="invalid-feedback"> :message</div>') !!}
                    </div>


                    <div class="form-group">
                        <label for="Fono">{{'Fono'}}</label>
                        <p style="color:#5a5a5ae7";>Formato:912345678</p>
                        <input type="text" name="Fono"id="Fono" value="{{isset($propietario->Fono)?$propietario->Fono:old('Fono')}}" class="form-control {{$errors->has('Fono')?'is-invalid':''}}"> 
                        {!! $errors->first('Fono','<div class="invalid-feedback"> :message</div>') !!}
                    </div>

                    <div class="form-group">
                      <label for="Razon_Social">{{'Razon Social'}}</label>
                      <p style="color:#5a5a5ae7";> Opcional </p>
                      <input type="text" name="Razon_Social"id="Razon_Social" value="{{isset($propietario->Nombre)?$propietario->Nombre:old('Nombre')}}" class="form-control">
                      
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

