
<form action="{{url('/registro')}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}    
    <label for="ID_condominio">{{'ID condominio'}}</label>
    <input type="text" name="ID_condominio" id="ID_condominio" value="">
    <br>
    <label for="Asunto">{{'Asunto'}}</label>
    <input type="text" name="Asunto" id="Asunto" value="">
    <br>
    <label for="Monto">{{'Monto'}}</label>
    <input type="text" name="Monto" id="Monto" value="">
    <br>
    <label for="Fecha_de_pago">{{'Fecha de Pago'}}</label>
    <input type="text" name="Fecha_de_pago" id="Fecha_de_pago" value="">
    <br>
    <label for="Detalle">{{'Detalle'}}</label>
    <input type="text" name="Detalle" id="Detalle" value="">
    <br>
    <input type="submit" value="Agregar">
    
</form>