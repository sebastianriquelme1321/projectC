@extends('adminlte::page')

@section('title', 'Registros')

@section('content')
<h1>Registros</h1>
<form action="{{url('/registro/'.$registro->ID_registro)}}" method="post" enctype="multipart/form-data">
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

                        <div class="form-group">
                            <label for="Asunto">{{'Asunto'}}</label>
                            <input type="text" name="Asunto" id="Asunto" value="{{$registro->Asunto}}"
                                class="form-control {{$errors->has('Asunto')?'is-invalid':''}}">
                            {!! $errors->first('Asunto','<div class="invalid-feedback"> :message</div>') !!}
                        </div>

                        <div class="form-group">
                            <label for="Monto">{{'Monto'}}</label>
                            <input type="text" name="Monto" id="Monto" value="{{$registro->Monto}}"
                                class="form-control {{$errors->has('Monto')?'is-invalid':''}}">
                            {!! $errors->first('Monto','<div class="invalid-feedback"> :message</div>') !!}
                        </div>

                        <div class="form-group">
                            <label for="Fecha_de_pago">{{'Fecha'}}</label>
                            
                            <input type="date" name="Fecha_de_pago" id="Fecha_de_pago"
                                value="{{$registro->Fecha_de_pago}}"
                                class="form-control {{$errors->has('Fecha_de_pago')?'is-invalid':''}}">
                            {!! $errors->first('Fecha_de_pago','<div class="invalid-feedback"> :message</div>') !!}
                        </div>

                        <div class="form-group">
                            <label for="Detalle">{{'Detalle'}}</label>
                            <input type="text" name="Detalle" id="Detalle" value="{{$registro->Detalle}}"
                                class="form-control {{$errors->has('Detalle')?'is-invalid':''}}">

                            {!! $errors->first('Detalle','<div class="invalid-feedback"> :message</div>') !!}
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <a href="{{url('/registro')}}" class="btn btn-secondary">Cancel</a>
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
