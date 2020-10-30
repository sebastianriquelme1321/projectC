
<form action="{{url('/jefe_de_hogar')}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}     
    <label for="ID_dept">{{'ID depto'}}</label>
    <input type="text" name="ID_dept" id="ID_dept" value="">
    <br>
    <label for="Rut_jefe">{{'Rut jefe'}}</label>
    <input type="text" name="Rut_jefe" id="Rut_jefe" value="">
    <br>
    <label for="Ver_jefe">{{'Ver jefe'}}</label>
    <input type="text" name="Ver_jefe" id="Ver_jefe" value="">
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
    <input type="submit" value="Agregar">
    
</form>