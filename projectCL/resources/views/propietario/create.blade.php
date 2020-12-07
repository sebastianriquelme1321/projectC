@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')
<h1>Propietario</h1>
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
                        <h3 class="card-title">Rellene los datos</h3>
                    </div>
                    <div class="card-body" style="display: block;">
                       
                        <div class="form-group">
                            <label for="id">{{'Usuario a enlazar'}}</label>
                            <select name="id" id="id" class="form-control custom-select {{$errors->has('id')?'is-invalid':''}}"     >
                                <option value="">-- Escoja el correo del Usuario --</option>
                                @foreach ($users as $user)
                                <option value="{{$user->id}}"> {{$user->email}} </option>
                                @endforeach
                            </select>
                            {!! $errors->first('ID_prop','<div class="invalid-feedback"> :message</div>') !!}
      
                        </div>                  
  

                        <div class="form-group">
                            <label for="Nombre">{{'Nombre Completo'}}</label>
                            <input type="text" name="Nombre" id="Nombre"
                                value="{{isset($propietario->Nombre)?$propietario->Nombre:old('Nombre')}}"
                                class="form-control {{$errors->has('Nombre')?'is-invalid':''}}">
                            {!! $errors->first('Nombre','<div class="invalid-feedback"> :message</div>') !!}
                        </div>

                        <div class="form-group">
                            <label for="Rut">{{'Rut'}}</label>
                            <p style="color:#5a5a5ae7" ;>Formato:12.345.678-9</p>
                            <input type="text" name="Rut_prop" id="Rut_prop"
                                value="{{isset($propietario->Rut_prop)?$propietario->Rut_prop:old('Rut_prop')}}"
                                class="form-control {{$errors->has('Rut_prop')?'is-invalid':''}}">
                            {!! $errors->first('Rut_prop','<div class="invalid-feedback"> :message</div>') !!}
                        </div>                   

                        <div class="form-group">
                            <label for="Fono">{{'Fono'}}</label>
                            <p style="color:#5a5a5ae7" ;>Formato:912345678</p>
                            <input type="text" name="Fono" id="Fono"
                                value="{{isset($propietario->Fono)?$propietario->Fono:old('Fono')}}"
                                class="form-control {{$errors->has('Fono')?'is-invalid':''}}">
                            {!! $errors->first('Fono','<div class="invalid-feedback"> :message</div>') !!}
                        </div>

                        <div class="form-group">
                            <label for="Razon_Social">{{'Razon Social'}}</label>
                            <p style="color:#5a5a5ae7" ;> Opcional </p>
                            <input type="text" name="Razon_Social" id="Razon_Social"
                                value=""
                                class="form-control">
                        </div>

                    </div>
                </div>
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


@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    var dato = $('#id').val();
    $.ajax({
      data: {"dato" : dato},
      url: "archivoEnviarDato.php",
      type: "post",
      success:  function (response) {
        alert(response);
      }
    });
</script>
@stop
