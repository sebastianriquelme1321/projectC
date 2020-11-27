@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')
<h1>Dashboard</h1>
<form action="{{url('/estacionamiento')}}" method="post" enctype="multipart/form-data">
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

                        <label for="ID_prop">{{'Nombre Propietario'}}</label>
                        <select name="ID_prop" id="inputID_prop" class="form-control custom-select {{$errors->has('ID_prop')?'is-invalid':''}}" >
                            <option value="">-- Escoja el nombre del Propietario --</option>
                            @foreach ($listaprop as $propietario)
                            <option value="{{$propietario['ID_prop']}}"> {{$propietario['Nombre']}} </option>   
                            @endforeach
                        </select>

                        {!! $errors->first('ID_prop','<div class="invalid-feedback"> :message</div>') !!}


                        <div class="form-group">
                            <label for="Numero">{{'Numero'}}</label>
                            <input type="text" name="Numero" id="Numero"
                                value="{{isset($estacionamiento->Numero)?$estacionamiento->Numero:old('ID_prop')}}"
                                class="form-control {{$errors->has('Numero')?'is-invalid':''}}">
                            {!! $errors->first('Numero','<div class="invalid-feedback"> :message</div>') !!}
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <a href="{{url('/estacionamiento')}}" class="btn btn-secondary">Cancel</a>
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
