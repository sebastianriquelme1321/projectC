
<form action="{{url('/pagos')}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}    
    <label for="ID_dept">{{'ID dept'}}</label>
    <input type="text" name="ID_dept" id="ID_dept" value="">
    <br>
    <label for="Monto">{{'Monto'}}</label>
    <input type="text" name="Monto" id="Monto" value="">
    <br>
    <label for="Monto_deuda">{{'Monto Deuda'}}</label>
    <input type="text" name="Monto_deuda" id="Monto_deuda" value="">
    <br>
    <label for="Fecha_de_pago">{{'Fecha de pago'}}</label>
    <input type="text" name="Fecha_de_pago" id="Fecha_de_pago" value="">
    <br>
    <label for="Mes_de_pago">{{'Mes_de_pago'}}</label>
    <input type="text" name="Mes_de_pago" id="Mes_de_pago" value="">
    <br>
    <label for="ComprobanteIMG">{{'Comprobante'}}</label>
    <input type="file" name="ComprobanteIMG" id="ComprobanteIMG" value="">
    <br>
    <label for="Detalle">{{'Detalle'}}</label>
    <input type="text" name="Detalle" id="Detalle" value="">
    <br>
    <input type="submit" value="Agregar">
    
</form>