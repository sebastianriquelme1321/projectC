<form action="{{url('/estacionamiento')}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}    
    <label for="ID_prop">{{'ID_prop'}}</label>
    <input type="text" name="ID_prop" id="ID_prop" value="">
    <br>
    <label for="Numero">{{'Numero'}}</label>
    <input type="text" name="Numero" id="Numero" value="">
    <br>
    <input type="submit" value="Agregar">
    
</form>