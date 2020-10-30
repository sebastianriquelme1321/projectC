<form action="{{url('/condominio')}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}    
   
    <label for="Region">{{'Region'}}</label>
    <input type="text" name="Region" id="Region" value="">
    <br>
    <label for="Ciudad">{{'Ciudad'}}</label>
    <input type="text" name="Ciudad" id="Ciudad" value="">
    <br>
    <label for="Calle">{{'Calle'}}</label>
    <input type="text" name="Calle" id="Calle" value="">
    <br>
    <label for="Numero">{{'Numero'}}</label>
    <input type="text" name="Numero" id="Numero" value="">
    <br>
    <label for="ID_ad">{{'ID_ad'}}</label>
    <input type="text" name="ID_ad" id="ID_ad" value="">
    <br>
    <label for="Rut_ad">{{'Rut_ad'}}</label>
    <input type="text" name="Rut_ad" id="Rut_ad" value="">
    <br>
    <label for="Ver_ad">{{'Ver_ad'}}</label>
    <input type="text" name="Ver_ad" id="Ver_ad" value="">
    <br>
    <label for="Calle">{{'Calle'}}</label>
    <input type="text" name="Calle" id="Calle" value="">
    <br>
    <label for="Nombre">{{'Nombre'}}</label>
    <input type="text" name="Nombre" id="Nombre" value="">
    <br>
    <label for="Apellido">{{'Apellido'}}</label>
    <input type="text" name="Apellido" id="Apellido" value="">
    <br>
    <label for="Fono">{{'Fono'}}</label>
    <input type="text" name="Fono" id="Fono" value="">
    <br>
    <label for="Correo">{{'Correo'}}</label>
    <input type="text" name="Correo" id="Correo" value="">
    <br>
    <label for="Password">{{'Password'}}</label>
    <input type="text" name="Password" id="Password" value="">
    <br>
    
  
    <input type="submit" value="Agregar">

    
</form>