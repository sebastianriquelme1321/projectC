<form action="{{url('/estacionamiento/'.$estacionamiento->ID_est)}}" method="post" enctype=" multipart/form-data">
    {{csrf_field()}}
    {{method_field('PATCH')}}

    <label for="ID_prop">{{'ID propietario'}}</label> 
    <input type="text" name="ID_prop" id="ID_prop" value="{{$estacionamiento->ID_prop}}">
    <br>
    <label for="Numero">{{'Numero'}}</label>
    <input type="text" name="Numero" id="Numero" value="{{$estacionamiento->Numero}}">
    <br>
    <input type="submit" value="Editar">
</form>