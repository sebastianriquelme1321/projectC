<form action="{{url('/departamento/'.$departamento->ID_dept)}}" method="post" enctype=" multipart/form-data">
    {{csrf_field()}}
    {{method_field('PATCH')}}


    <label for="ID_dept">{{'ID dept'}}</label>
    <input type="text" name="ID_dept" id="ID_dept" value="{{$departamento->ID_dept}}">
    <br>
    <label for="ID_prop">{{'ID propietario'}}</label> 
    <input type="text" name="ID_prop" id="ID_prop" value="{{$departamento->ID_prop}}">
    <br>
    <label for="Numero">{{'Numero'}}</label>
    <input type="text" name="Numero" id="Numero" value="{{$departamento->Numero}}">
    <br>
    <label for="Bloque">{{'Bloque'}}</label>
    <input type="text" name="Bloque" id="Bloque" value="{{$departamento->Bloque}}">
    <br>
    <label for="Password">{{'Password'}}</label>
    <input type="text" name="Password" id="Password" value="{{$departamento->Password}}">
    <br>
    <input type="submit" value="Editar">



</form>