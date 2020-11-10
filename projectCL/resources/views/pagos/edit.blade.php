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