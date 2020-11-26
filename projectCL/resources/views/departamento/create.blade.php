@extends('adminlte::page')

@section('title', 'Departamento')

@section('content')
<h1>Departamento</h1>
<form action="{{url('/departamento')}}" method="post" enctype="multipart/form-data">
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
                        <h3 class="card-title">Departamento</h3>


                    </div>
                    <div class="card-body" style="display: block;">
                        <div class="form-group">
                            <label for="ID_condominio">{{'Administrador'}}</label>
                            <select name="ID_condominio" id="inputID_condominio" class="form-control" >
                                <option value="">-- Escoja el nombre del Administrador --</option>
                                @foreach ($condominios as $condominio)
                                <option value="{{$condominio['ID_condominio']}}"> {{$condominio['Nombre']}} </option>
                                @endforeach
                            </select>

                            {!! $errors->first('ID_condominio','<div class="invalid-feedback"> :message</div>') !!}

                        </div>

                        <div class="form-group">
                            <label for="ID_prop">{{'Nombre Propietario'}}</label>
                            <select name="ID_prop" id="inputID_prop" class="form-control" >
                                <option value="">-- Escoja el nombre del Propietario --</option>
                                @foreach ($propietarios as $propietario)
                                <option value="{{$propietario['ID_prop']}}"> {{$propietario['Nombre']}} </option>
                                @endforeach
                            </select>
                            {!! $errors->first('ID_prop','<div class="invalid-feedback"> :message</div>') !!}

                        </div>

                        <div class="form-group">
                            <label for="Bloque">{{'Bloque'}}</label>
                            <input type="text" name="Bloque" id="Bloque"
                                value="{{isset($departamento->Bloque)?$departamento->Bloque:old('Bloque')}}"
                                class="form-control {{$errors->has('Bloque')?'is-invalid':''}}">

                            {!! $errors->first('Bloque','<div class="invalid-feedback"> :message</div>') !!}

                        </div>

                        <div class="form-group">
                            <label for="Numero">{{'Numero'}}</label>
                            <input type="text" name="Numero" id="Numero"
                                value="{{isset($departamento->Numero)?$departamento->Numero:old('Numero')}}"
                                class="form-control {{$errors->has('Numero')?'is-invalid':''}}">

                            {!! $errors->first('Numero','<div class="invalid-feedback"> :message</div>') !!}

                        </div>

                        <div class="form-group">
                            <label for="Password">{{'Password'}}</label>
                            <input type="text" name="Password" id="Password"
                                value="{{isset($departamento->Password)?$departamento->Password:old('Password')}}"
                                class="form-control {{$errors->has('Password')?'is-invalid':''}}">

                            {!! $errors->first('Password','<div class="invalid-feedback"> :message</div>') !!}
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <a href="{{url('/departamento')}}" class="btn btn-secondary">Cancel</a>
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
