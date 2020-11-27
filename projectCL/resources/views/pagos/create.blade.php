@extends('adminlte::page')

@section('title', 'Pagos')

@section('content')
<h1>Pagos</h1>
<form action="{{url('/pagos')}}" method="post" enctype="multipart/form-data">
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
                            
                                <select name="ID_dept" id="ID_dept" class="form-control  {{$errors->has('ID_dept')?'is-invalid':''}}"     >
                                    <option value="">-- Seleccione Departamento --</option>
                                    @foreach ($departamentos as $departamento)
                                    <option value="{{$departamento['ID_dept']}}"> {{$departamento['Numero']}} - {{ $departamento['Bloque']}} </option>
                                    @endforeach
                                </select>

                            {!! $errors->first('ID_dept','<div class="invalid-feedback"> :message</div>') !!}
                        </div>

                        <div class="form-group">
                            <label for="Monto">{{'Monto'}}</label>
                            <input type="text" name="Monto" id="Monto"
                                value="{{isset($pago->Monto)?$pago->Monto:old('Monto')}}"
                                class="form-control {{$errors->has('Monto')?'is-invalid':''}}">
                            {!! $errors->first('Monto','<div class="invalid-feedback"> :message</div>') !!}
                        </div>

                        <div class="form-group">
                            <label for="Monto_deuda">{{'Monto Deuda'}}</label>
                            <input type="text" name="Monto_deuda" id="Monto_deuda"
                                value="{{isset($pago->Monto_deuda)?$pago->Monto_deuda:old('Monto_deuda')}}"
                                class="form-control {{$errors->has('Monto_deuda')?'is-invalid':''}}">
                            {!! $errors->first('Monto_deuda','<div class="invalid-feedback"> :message</div>') !!}
                        </div>

                        <div class="form-group">
                            <label for="Fecha_de_pago">{{'Fecha del pago'}}</label>
                            <p style="color:#5a5a5ae7" ;>Formato:YYYY-MM-DD</p>
                            <input type="text" name="Fecha_de_pago" id="Fecha_de_pago"
                                value="{{isset($pago->Fecha_de_pago)?$pago->Fecha_de_pago:old('Fecha_de_pago')}}"
                                class="form-control {{$errors->has('Fecha_de_pago')?'is-invalid':''}}">
                            {!! $errors->first('Fecha_de_pago','<div class="invalid-feedback"> :message</div>') !!}
                        </div>

                        <div class="form-group">
                            <label for="Mes_de_pago">{{'Mes del pago'}}</label>
                            <p style="color:#5a5a5ae7" ;>Formato:YYYY-MM-DD</p>
                            <input type="text" name="Mes_de_pago" id="Mes_de_pago"
                                value="{{isset($pago->Mes_de_pago)?$pago->Mes_de_pago:old('Mes_de_pago')}}"
                                class="form-control {{$errors->has('Mes_de_pago')?'is-invalid':''}}">
                            {!! $errors->first('Mes_de_pago','<div class="invalid-feedback"> :message</div>') !!}
                        </div>

                        <div class="form-group">
                            <label for="ComprobanteIMG">{{'Comprobante'}}</label>
                            <input type="file" name="ComprobanteIMG" id="ComprobanteIMG"
                                value="{{isset($pago->ComprobanteIMG)?$pago->ComprobanteIMG:old('ComprobanteIMG')}}"
                                class="form-control {{$errors->has('ComprobanteIMG')?'is-invalid':''}}">
                            {!! $errors->first('ComprobanteIMG','<div class="invalid-feedback"> :message</div>') !!}
                        </div>

                        <div class="form-group">
                            <label for="Detalle">{{'Detalle'}}</label>
                            <input type="text" name="Detalle" id="Detalle"
                                value="{{isset($pago->Detalle)?$pago->Detalle:old('Detalle')}}"
                                class="form-control {{$errors->has('Detalle')?'is-invalid':''}}">
                            {!! $errors->first('Detalle','<div class="invalid-feedback"> :message</div>') !!}
                        </div>

                    </div>
                </div>
            </div>
        </div>
      
        <div class="row">
            <div class="col-12">
                <a href="{{url('/pagos')}}" class="btn btn-secondary">Cancel</a>
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
