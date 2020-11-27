@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')
<h1>Dashboard</h1>
<form action="{{url('/departamento/'.$departamento->ID_dept)}}" method="post" enctype="multipart/form-data">
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
                        <h3 class="card-title"></h3>
                    </div>
                    <div class="card-body" style="display: block;">
                      
                        <div class="form-group">
                            <label for="ID_prop">{{'Nombre Propietario'}}</label>
                            
                            <select name="ID_prop" id="ID_prop" class="form-control custom-select {{$errors->has('ID_prop')?'is-invalid':''}}">
                                
                                <option value=" {{$departamento->ID_prop}}">  {{$listaprop[$departamento->ID_prop-1]->Nombre}} </option>
    
                                @foreach ($listaprop as $propietario)
                                @if ($propietario->ID_prop != $departamento->ID_prop)
                                <option value="{{$propietario['ID_prop']}}"> {{$propietario['Nombre']}} </option>
                                @endif
                                @endforeach

                            </select>

                            {{--  <input type="text" name="ID_prop" id="ID_prop" value="{{$departamento->ID_prop}}"
                                class="form-control {{$errors->has('ID_prop')?'is-invalid':''}}">  --}}


                            {!! $errors->first('ID_prop','<div class="invalid-feedback"> :message</div>') !!}
                        </div>

                        <div class="form-group">
                            <label for="Bloque">{{'Bloque'}}</label>
                            <input type="text" name="Bloque" id="Bloque" value="{{$departamento->Bloque}}"
                                class="form-control {{$errors->has('Bloque')?'is-invalid':''}}">
                            {!! $errors->first('Bloque','<div class="invalid-feedback"> :message</div>') !!}
                        </div>

                        <div class="form-group">
                            <label for="Numero">{{'Numero'}}</label>
                            <input type="text" name="Numero" id="Numero" value="{{$departamento->Numero}}"
                                class="form-control {{$errors->has('Numero')?'is-invalid':''}}">
                            {!! $errors->first('Numero','<div class="invalid-feedback"> :message</div>') !!}
                        </div>

                        <div class="form-group">
                            <label for="Password">{{'Password'}}</label>
                            <input type="text" name="Password" id="Password" value="{{$departamento->Password}}"
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
