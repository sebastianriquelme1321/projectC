<form action="{{url('/registro/'.$registro->ID_registro)}}" method="post" enctype=" multipart/form-data">
    {{csrf_field()}}
    {{method_field('PATCH')}}  
    <label for="Asunto">{{'Asunto'}}</label>
    <input type="text" name="Asunto" id="Asunto" value="{{$registro->Asunto}}">
    <br>
    <label for="Monto">{{'Monto'}}</label>
    <input type="text" name="Monto" id="Monto" value="{{$registro->Monto}}">
    <br>
    <label for="Fecha_de_pago">{{'Fecha de Pago'}}</label>
    <input type="text" name="Fecha_de_pago" id="Fecha_de_pago" value="{{$registro->Fecha_de_pago}}">
    <br>
    <label for="Detalle">{{'Detalle'}}</label>
    <input type="text" name="Detalle" id="Detalle" value="{{$registro->Detalle}}">
    <br>
    <input type="submit" value="Editar">



</form>