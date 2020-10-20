
<form action="{{url('/propietarios')}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <label for="Nombre">{{'Nombre'}}</label>
    <input type="text" name="Nombre" id="Nombre" value="">
    <br>
    <label for="Apellido">{{'Apellido'}}</label>
    <input type="text" name="Apellido" id="Apellido" value="">
    <br>
    <br>
    <label for="Correo">{{'Correo'}}</label>
    <input type="text" name="Correo" id="Correo" value="">
    <br>
    <label for="Fono">{{'Fono'}}</label>
    <input type="text" name="Fono" id="Fono" value="">
    <br>
    <input type="submit" value="Agregar">
    
</form>