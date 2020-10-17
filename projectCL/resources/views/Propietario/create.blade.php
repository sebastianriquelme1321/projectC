Seccion para crear propietario
<form action="{{url('/Propietarios')}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}


<label for="Rut_emp">{{'Rut empresa'}}</label>
<input type="text" name="Rut_emp" id="Rut_emp" value="">
<label for="Ver_emp">{{''}}</label>
<input type="text" name="Ver_emp" id="Ver_emp" value="">
<br/>
<label for="Nombre">{{'Nombre'}}</label>
<input type="text" name="Nombre" id="Nombre" value="">
<br/>
<label for="Apellido">{{'Apellido'}}</label>
<input type="text" name="Apellido" id="Apellido" value="">
<br/>
<label for="Fono">{{'Fono'}}</label>
<input type="text" name="Fono" id="Fono" value="">
<br/>
<label for="Correo">{{'Correo'}}</label>
<input type="email" name="Correo" id="Correo" value="">
<br/>
<input type="submit" value="Agregar">
</form>