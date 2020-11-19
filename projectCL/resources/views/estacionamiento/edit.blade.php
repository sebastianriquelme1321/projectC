@extends('adminlte::page')

@section('title', 'Estacionamiento')

@section('content')
<h1>Estacionamiento</h1>
<form action="{{url('/estacionamiento/'.$estacionamiento->ID_est)}}" method="post" enctype="multipart/form-data">
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
                            <label for="ID_prop">{{'ID Propietario'}}</label>
                            <input type="text" name="ID_prop" id="ID_prop" value="{{$estacionamiento->ID_prop}}"
                                class="form-control {{$errors->has('ID_prop')?'is-invalid':''}}">
                            {!! $errors->first('ID_prop','<div class="invalid-feedback"> :message</div>') !!}
                        </div>

                        <div class="form-group">
                            <label for="Numero">{{'Numero'}}</label>
                            <input type="text" name="Numero" id="Numero" value="{{$estacionamiento->Numero}}"
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
                <input type="submit" value="Editar" class="btn btn-success float-right">
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
