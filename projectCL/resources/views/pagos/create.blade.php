@extends('adminlte::page')

@section('title', 'Pagos')

@section('content_header')
    <h1>Pagos</h1>
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
                        <label for="Monto_deuda">{{'Monto Deuda'}}</label>
                        <input type="text" name="Monto_deuda"id="Monto_deuda" value="" class="form-control" 
                    </div>

                    <div class="form-group">
                        <label for="Fecha_de_pago">{{'Fecha del pago'}}</label>
                        <input type="text" name="Fecha_de_pago"id="Fecha_de_pago" value="" class="form-control" 
                    </div>

                    <div class="form-group">
                        <label for="Mes_de_pago">{{'Mes del pago'}}</label>
                        <input type="text" name="Mes_de_pago"id="Mes_de_pago" value="" class="form-control" 
                    </div>

                    <div class="form-group">
                        <label for="ComprobanteIMG">{{'Comprobante'}}</label>
                        <input type="file" name="ComprobanteIMG"id="ComprobanteIMG" value="" class="form-control" 
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
                <input type="submit" value="Agregar" class="btn btn-success float-right">
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