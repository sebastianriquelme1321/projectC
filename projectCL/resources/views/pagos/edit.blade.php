@extends('adminlte::page')

@section('title', 'Pagos')

@section('content')
<h1>Pagos</h1>
<form action="{{url('/pagos/'.$pago->ID_pagos)}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    {{method_field('PATCH')}}
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

                        {{--  <div class="form-group">
                            <label for="ID_dept">{{'ID dept'}}</label>
                            <select name="ID_dept" id="ID_dept" class="form-control  {{$errors->has('ID_dept')?'is-invalid':''}}">

                                <option value="{{$pago->ID_dept}}">  {{$listadepartamentos[$pago->ID_dept-1]->Numero}} </option>
    
                                @foreach ($listadepartamentos as $auxdepartamento)
                                @if ($auxdepartamento->ID_dept != $pago->ID_dept)
                                <option value="{{$auxdepartamento['ID_dept']}}"> {{$auxdepartamento['Numero']}} </option>
                                @endif
                                @endforeach

                            </select>
                            
                            {!! $errors->first('ID_dept','<div class="invalid-feedback"> :message</div>') !!}
                        </div>  --}}

                        <input type="hidden" name="ID_dept" id="ID_dept" value="{{$pago->ID_dept}}">

                        <div class="form-group">
                            <label for="Monto">{{'Monto'}}</label>
                            <input type="text" name="Monto" id="Monto"
                                value="{{$pago->Monto}}"
                                class="form-control {{$errors->has('Monto')?'is-invalid':''}}">
                            {!! $errors->first('Monto','<div class="invalid-feedback"> :message</div>') !!}
                        </div>

                        <div class="form-group">
                            <label for="Monto_deuda">{{'Monto Deuda'}}</label>
                            <input type="text" name="Monto_deuda" id="Monto_deuda"
                                value="{{$pago->Monto_deuda}}"
                                class="form-control {{$errors->has('Monto_deuda')?'is-invalid':''}}">
                            {!! $errors->first('Monto_deuda','<div class="invalid-feedback"> :message</div>') !!}
                        </div>

                        <div class="form-group">
                            <label for="Fecha_de_pago">{{'Fecha del pago'}}</label>                            
                            <input type="date" name="Fecha_de_pago" id="Fecha_de_pago"
                                value="{{$pago->Fecha_de_pago}}"
                                class="form-control {{$errors->has('Fecha_de_pago')?'is-invalid':''}}">
                            {!! $errors->first('Fecha_de_pago','<div class="invalid-feedback"> :message</div>') !!}
                        </div>

                        <div class="form-group">
                            <label for="Mes_de_pago">{{'Mes del pago'}}</label>                            
                            <input type="date" name="Mes_de_pago" id="Mes_de_pago" 
                                value="{{$pago->Mes_de_pago}}"
                                class="form-control {{$errors->has('Mes_de_pago')?'is-invalid':''}}">
                            {!! $errors->first('Mes_de_pago','<div class="invalid-feedback"> :message</div>') !!}
                        </div>

                        
                        {{--  <div class="form-group">
                            <label for="Detalle">{{'Detalle'}}</label>
                            <input type="text" name="Detalle" id="Detalle"
                                value="{{$pago->Detalle}}"
                                class="form-control {{$errors->has('Detalle')?'is-invalid':''}}">
                            {!! $errors->first('Detalle','<div class="invalid-feedback"> :message</div>') !!}
                        </div>  --}}

                        <div class="form-group">
                            <label for="Detalle">{{'Detalle'}}</label>
                            <p><textarea name="Detalle" id="Detalle" rows="5" cols="30" class="form-control">{{$pago->Detalle}}</textarea></p>
                            {!! $errors->first('Detalle','<div class="invalid-feedback"> :message</div>') !!}
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <a href="{{url('/pagos')}}" class="btn btn-secondary">Cancel</a>
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
