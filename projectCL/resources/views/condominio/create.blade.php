@extends('adminlte::page')

@section('title', 'Condominio')

@section('content')
<h1>Condominio</h1>
<form action="{{url('/condominio')}}" method="post" enctype="multipart/form-data">
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
                        <h3 class="card-title"></h3>
                    </div>
                    <div class="card-body" style="display: block;">

                        <div class="form-group">
                            <label for="Region">{{'Region'}}</label>
                            <input type="text" name="Region" id="Region"
                                value="{{isset($condominio->Region)?$condominio->Region:old('Region')}}"
                                class="form-control {{$errors->has('Region')?'is-invalid':''}}">
                            {!! $errors->first('Region','<div class="invalid-feedback"> :message</div>') !!}
                        </div>

                        <div class="form-group">
                            <label for="Ciudad">{{'Ciudad'}}</label>
                            <input type="text" name="Ciudad" id="Ciudad"
                                value="{{isset($condominio->Ciudad)?$condominio->Ciudad:old('Ciudad')}}"
                                class="form-control {{$errors->has('Ciudad')?'is-invalid':''}} ">
                            {!! $errors->first('Ciudad','<div class="invalid-feedback"> :message</div>') !!}
                        </div>

                        <div class="form-group">
                            <label for="Calle">{{'Calle'}}</label>
                            <input type="text" name="Calle" id="Calle"
                                value="{{isset($condominio->Calle)?$condominio->Calle:old('Calle')}}"
                                class="form-control {{$errors->has('Calle')?'is-invalid':''}}">
                            {!! $errors->first('Calle','<div class="invalid-feedback"> :message</div>') !!}
                        </div>

                        <div class="form-group">
                            <label for="Numero">{{'Numero'}}</label>
                            <input type="text" name="Numero" id="Numero"
                                value="{{isset($condominio->Numero)?$condominio->Numero:old('Numero')}}"
                                class="form-control {{$errors->has('Numero')?'is-invalid':''}}">
                            {!! $errors->first('Numero','<div class="invalid-feedback"> :message</div>') !!}
                        </div>

                        <div class="form-group">
                            <label for="Rut_ad">{{'Rut Admin'}}</label>
                            <p style="color:#5a5a5ae7" ;>Formato:12.345.678-9</p>
                            <input type="text" name="Rut_ad" id="Rut_ad"
                                value="{{isset($condominio->Rut_ad)?$condominio->Rut_ad:old('Rut_ad')}}"
                                class="form-control {{$errors->has('Rut_ad')?'is-invalid':''}}">
                            {!! $errors->first('Rut_ad','<div class="invalid-feedback"> :message</div>') !!}
                        </div>

                        <div class="form-group">
                            <label for="Nombre">{{'Nombre Admin'}}</label>
                            <input type="text" name="Nombre" id="Nombre"
                                value="{{isset($condominio->Nombre)?$condominio->Nombre:old('Nombre')}}"
                                class="form-control {{$errors->has('Nombre')?'is-invalid':''}}">
                            {!! $errors->first('Nombre','<div class="invalid-feedback"> :message</div>') !!}
                        </div>

                        <div class="form-group">
                            <label for="Apellido">{{'Apellido Admin'}}</label>
                            <input type="text" name="Apellido" id="Apellido"
                                value="{{isset($condominio->Apellido)?$condominio->Apellido:old('Apellido')}}"
                                class="form-control {{$errors->has('Apellido')?'is-invalid':''}}">
                            {!! $errors->first('Apellido','<div class="invalid-feedback"> :message</div>') !!}
                        </div>

                        <div class="form-group">
                            <label for="Fono">{{'Fono Admin'}}</label>
                            <p style="color:#5a5a5ae7" ;>Formato:912345678</p>
                            <input type="text" name="Fono" id="Fono"
                                value="{{isset($condominio->Fono)?$condominio->Fono:old('Fono')}}"
                                class="form-control {{$errors->has('Fono')?'is-invalid':''}}">
                            {!! $errors->first('Fono','<div class="invalid-feedback"> :message</div>') !!}
                        </div>

                        <div class="form-group">
                            <label for="Correo">{{'Correo Admin'}}</label>
                            <input type="text" name="Correo" id="Correo"
                                value="{{isset($condominio->Correo)?$condominio->Correo:old('Correo')}}"
                                class="form-control {{$errors->has('Correo')?'is-invalid':''}}">
                            {!! $errors->first('Correo','<div class="invalid-feedback"> :message</div>') !!}
                        </div>

                        <div class="form-group">
                            <label for="Password">{{'Password Admin'}}</label>
                            <input type="text" name="Password" id="Password"
                                value="{{isset($condominio->Password)?$condominio->Password:old('Password')}}"
                                class="form-control {{$errors->has('Password')?'is-invalid':''}}">
                            {!! $errors->first('Password','<div class="invalid-feedback"> :message</div>') !!}
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <a href="{{url('/condominio')}}" class="btn btn-secondary">Cancel</a>
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
