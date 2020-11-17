<form action="{{url('/condominio/'.$condominio->ID_condominio)}}" method="post" enctype=" multipart/form-data">

    {{csrf_field()}}
    {{method_field('PATCH')}}


    <label for="Region">{{'Region'}}</label>
    <input type="text" name="Region" id="Region" value="{{$condominio->Region}}">
    <br>
    <label for="Ciudad">{{'Ciudad'}}</label>
    <input type="text" name="Ciudad" id="Ciudad" value="{{$condominio->Ciudad}}">
    <br>
    <label for="Calle">{{'Calle'}}</label>
    <input type="text" name="Calle" id="Calle" value="{{$condominio->Calle}}">
    <br>
    <label for="Numero">{{'Numero'}}</label>
    <input type="text" name="Numero" id="Numero" value="{{$condominio->Numero}}">
    <br>
    <label for="ID_ad">{{'ID_ad'}}</label>
    <input type="text" name="ID_ad" id="ID_ad" value="{{$condominio->ID_ad}}">
    <br>
    <label for="Rut_ad">{{'Rut_ad'}}</label>
    <input type="text" name="Rut_ad" id="Rut_ad" value="{{$condominio->Rut_ad}}">
    <br>
    <label for="Ver_ad">{{'Ver_ad'}}</label>
    <input type="text" name="Ver_ad" id="Ver_ad" value="{{$condominio->Ver_ad}}">
    <br>
    <label for="Calle">{{'Calle'}}</label>
    <input type="text" name="Calle" id="Calle" value="{{$condominio->Calle}}">
    <br>
    <label for="Nombre">{{'Nombre'}}</label>
    <input type="text" name="Nombre" id="Nombre" value="{{$condominio->Nombre}}">
    <br>
    <label for="Apellido">{{'Apellido'}}</label>
    <input type="text" name="Apellido" id="Apellido" value="{{$condominio->Apellido}}">
    <br>
    <label for="Fono">{{'Fono'}}</label>
    <input type="text" name="Fono" id="Fono" value="{{$condominio->Fono}}">
    <br>
    <label for="Correo">{{'Correo'}}</label>
    <input type="text" name="Correo" id="Correo" value="{{$condominio->Correo}}">
    <br>
    <label for="Password">{{'Password'}}</label>
    <input type="text" name="Password" id="Password" value="{{$condominio->Password}}">
    <br>

    <input type="submit" value="Editar">



</form>