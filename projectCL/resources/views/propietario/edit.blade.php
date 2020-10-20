<form action="" method="post">
    

    <label for="Nombre">{{'Nombre'}}</label>
    <input type="text" name="Nombre" id="Nombre" value="{{$propietarios->Nombre}}">
    <br>
    <label for="Apellido">{{'Apellido'}}</label>
    <input type="text" name="Apellido" id="Apellido" value="{{$propietarios->Apellido}}">
    <br>
    <label for="Fono">{{'Fono'}}</label>
    <input type="text" name="fono" id="Fono" value="{{$propietarios->Fono}}">
    <br>
    <input type="submit" value="editar">



</form>
