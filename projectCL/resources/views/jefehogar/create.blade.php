@extends('adminlte::page')

@section('title', 'Jefe de Hogar')

@section('content')
<h1>Jefe de Hogar</h1>
<form action="{{url('/jefe_de_hogar')}}" method="post" enctype="multipart/form-data">
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
                            <label for="ID_dept">{{'Departamento asociado'}}</label>

                            <select name="ID_dept" id="ID_dept" class="form-control custom-select {{$errors->has('ID_dept')?'is-invalid':''}}"     >
                                <option value="">-- Seleccione Departamento --</option>
                                @foreach ($departamentos as $departamento)
                                <option value="{{$departamento['ID_dept']}}"> {{$departamento['Numero']}} - {{ $departamento['Bloque']}} </option>
                                @endforeach
                            </select>
                            {!! $errors->first('ID_dept','<div class="invalid-feedback"> :message</div>') !!}
                        </div>

                        <div class="form-group">
                            <label for="Rut_jefe">{{'Rut jefe'}}</label>
                            <p style="color:#5a5a5ae7" ;>Ej: 12.345.678-9</p>
                            <input type="text" name="Rut_jefe" id="Rut_jefe"
                                value="{{isset($jefe_de_hogar->Rut_jefe)?$jefe_de_hogar->Rut_jefe:old('Rut_jefe')}}"
                                class="form-control {{$errors->has('Rut_jefe')?'is-invalid':''}}">
                            {!! $errors->first('Rut_jefe','<div class="invalid-feedback"> :message</div>') !!}
                        </div>

                        <div class="form-group">
                            <label for="Nombre">{{'Nombre'}}</label>
                            <input type="text" name="Nombre" id="Nombre"
                                value="{{isset($jefe_de_hogar->Nombre)?$jefe_de_hogar->Nombre:old('Nombre')}}"
                                class="form-control {{$errors->has('Nombre')?'is-invalid':''}}">
                            {!! $errors->first('Nombre','<div class="invalid-feedback"> :message</div>') !!}
                        </div>

                        <div class="form-group">
                            <label for="Apellido">{{'Apellido'}}</label>
                            <input type="text" name="Apellido" id="Apellido"
                                value="{{isset($jefe_de_hogar->Apellido)?$jefe_de_hogar->Apellido:old('Apellido')}}"
                                class="form-control {{$errors->has('Apellido')?'is-invalid':''}}">
                            {!! $errors->first('Apellido','<div class="invalid-feedback"> :message</div>') !!}
                        </div>

                        <div class="form-group">
                            <label for="Fono">{{'Teléfono'}}</label>
                            <p style="color:#5a5a5ae7" ;>Ej: 912345678</p>
                            <input type="text" name="Fono" id="Fono"
                                value="{{isset($jefe_de_hogar->Fono)?$jefe_de_hogar->Fono:old('Fono')}}"
                                class="form-control {{$errors->has('Fono')?'is-invalid':''}}">
                            {!! $errors->first('Fono','<div class="invalid-feedback"> :message</div>') !!}
                        </div>

                        <div class="form-group">
                            <label for="Correo">{{'Correo'}}</label>
                            <input type="text" name="Correo" id="Correo"
                                value="{{isset($jefe_de_hogar->Correo)?$jefe_de_hogar->Correo:old('Correo')}}"
                                class="form-control {{$errors->has('Correo')?'is-invalid':''}}">
                            {!! $errors->first('Correo','<div class="invalid-feedback"> :message</div>') !!}
                        </div>

                    </div>
                </div>
            </div> 
        </div>

        <div class="row">
            <div class="col-12">
                <a href="{{url('/jefe_de_hogar')}}" class="btn btn-secondary">Cancel</a>
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
    console.log('Hi!');

</script>
@stop
