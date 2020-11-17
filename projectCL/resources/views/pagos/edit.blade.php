<form action="{{url('/pagos/'.$pago->ID_pagos)}}" method="post" enctype=" multipart/form-data">
    {{csrf_field()}}
    {{method_field('PATCH')}}  
      
    <label for="ID_dept">{{'ID dept'}}</label> 
    <input type="text" name="ID_dept" id="ID_dept" value="{{$pago->ID_dept}}">
    <br>
    <label for="Monto">{{'Monto'}}</label>
    <input type="text" name="Monto" id="Monto" value="{{$pago->Monto}}">
    <br>
    <label for="Monto_deuda">{{'Monto Deuda'}}</label>
    <input type="text" name="Monto_deuda" id="Monto_deuda" value="{{$pago->Monto_deuda}}">
    <br>
    <label for="Fecha_de_pago">{{'Fecha de Pago'}}</label>
    <input type="text" name="Fecha_de_pago" id="Fecha_de_pago" value="{{$pago->Fecha_de_pago}}">
    <br>
    <label for="Mes_de_pago">{{'Mes de Pago'}}</label>
    <input type="text" name="Mes_de_pago" id="Mes_de_pago" value="{{$pago->Mes_de_pago}}">
    <br>
    <label for="ComprobanteIMG">{{'Comprobante'}}</label>
    <img src="{{asset('storage').'/'.$pago->ComprobanteIMG}}" alt="" width="200">
    <input type="file" name="ComprobanteIMG" id="ComprobanteIMG" value="">
    <br>
    <label for="Detalle">{{'Detalle'}}</label>
    <input type="text" name="Detalle" id="Detalle" value="{{$pago->Detalle}}">
    <br>
    <input type="submit" value="Editar">



</form>

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
    <form action="{{url('/pagos')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <section class="content">
            <div class="row">
              <div class="col-md-6">
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">General</h3>
      
                   
                  </div>
                  <div class="card-body" style="display: block;">

                    <div class="form-group">
                      <label for="ID_dept">{{'ID dept'}}</label>
                      <input type="text" name="ID_dept"id="ID_dept" value="" class="form-control" >
                    </div>

                    <div class="form-group">
                        <label for="Monto">{{'Monto'}}</label>
                        <input type="text" name="Monto"id="Monto" value="" class="form-control" 
                    </div> 
                    
                    <div class="form-group">
                        <label for="Monto_deuda">{{'Monto_deuda jefe'}}</label>
                        <input type="text" name="Monto_deuda"id="Monto_deuda" value="" class="form-control" 
                    </div>

                    <div class="form-group">
                        <label for="Fecha_de_pago">{{'Fecha_de_pago'}}</label>
                        <input type="text" name="Fecha_de_pago"id="Fecha_de_pago" value="" class="form-control" 
                    </div>

                    <div class="form-group">
                        <label for="Mes_de_pago">{{'Mes_de_pago'}}</label>
                        <input type="text" name="Mes_de_pago"id="Mes_de_pago" value="" class="form-control" 
                    </div>

                    <div class="form-group">
                        <label for="ComprobanteIMG">{{'Comprobante'}}</label>
                        <img src="{{asset('storage').'/'.$pago->ComprobanteIMG}}" alt="" width="200">
                        <input type="text" name="ComprobanteIMG"id="ComprobanteIMG" value="" class="form-control" 
                    </div>

                    <div class="form-group">
                        <label for="Detalle">{{'Detalle'}}</label>
                        <input type="text" name="Detalle"id="Detalle" value="" class="form-control" 
                    </div>
                                        
                    </div>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
              
                <!-- /.card -->
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

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop