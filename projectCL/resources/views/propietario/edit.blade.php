<form action="{{url('/propietarios/'.$propietario->ID_prop)}}" method="post" enctype=" multipart/form-data">
    {{csrf_field()}}
    {{method_field('PATCH')}}
    

    <label for="Nombre">{{'Nombre'}}</label>
    <input type="text" name="Nombre" id="Nombre" value="{{$propietario->Nombre}}">
    <br>
    <label for="Apellido">{{'Apellido'}}</label> 
    <input type="text" name="Apellido" id="Apellido" value="{{$propietario->Apellido}}">
    <br>
    <label for="Fono">{{'Fono'}}</label>
    <input type="text" name="Fono" id="Fono" value="{{$propietario->Fono}}">
    <br>
    <input type="submit" value="Editar">



</form>
