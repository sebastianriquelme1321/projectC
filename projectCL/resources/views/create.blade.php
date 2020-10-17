Seccion para crear propietario
<form action="{{url('/Propietarios')}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
<label for="nombre">{{'Nombre'}}</label>
<input type="text" name="Nombre" id="Nombre" value="">

<input type="submit" value="Agregar">
</form>