
<form action="{{url('/departamento')}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}    
    <label for="ID_prop">{{'ID_prop'}}</label>
    <input type="text" name="ID_prop" id="ID_prop" value="">
    <br>
    <br>
    <label for="Numero">{{'Numero'}}</label>
    <input type="text" name="Numero" id="Numero" value="">
    <br>
    <label for="Bloque">{{'Bloque'}}</label>
    <input type="text" name="Bloque" id="Bloque" value="">
    <br>
    <label for="Password">{{'Password'}}</label>
    <input type="text" name="Password" id="Password" value="">
    <br>
    <input type="submit" value="Agregar">
    
</form>