<form action="{{url('/jefe_de_hogar/'.$jefe_de_hogar->ID_jefe)}}" method="post" enctype=" multipart/form-data">
    {{csrf_field()}}
    {{method_field('PATCH')}}

    <label for="ID_dept">{{'ID dept'}}</label>
    <input type="text" name="ID_dept" id="ID_dept" value="{{$jefe_de_hogar->ID_dept}}">
    <br>    
    <label for="Rut_jefe">{{'Rut jefe'}}</label>
    <input type="text" name="Rut_jefe" id="Rut_jefe" value="{{$jefe_de_hogar->Rut_jefe}}">
    <br>
    <label for="Ver_jefe">{{'Ver jefe'}}</label>
    <input type="text" name="Ver_jefe" id="Ver_jefe" value="{{$jefe_de_hogar->Ver_jefe}}">
    <br>
    <label for="Nombre">{{'Nombre'}}</label>
    <input type="text" name="Nombre" id="Nombre" value="{{$jefe_de_hogar->Nombre}}">
    <br>
    <label for="Apellido">{{'Apellido'}}</label>
    <input type="text" name="Apellido" id="Apellido" value="{{$jefe_de_hogar->Apellido}}">
    <br>
    <label for="Fono">{{'Fono'}}</label>
    <input type="text" name="Fono" id="Fono" value="{{$jefe_de_hogar->Fono}}">
    <br>
    <label for="Correo">{{'Correo'}}</label>
    <input type="text" name="Correo" id="Correo" value="{{$jefe_de_hogar->Correo}}">
    <br>
    <input type="submit" value="Editar">



</form>