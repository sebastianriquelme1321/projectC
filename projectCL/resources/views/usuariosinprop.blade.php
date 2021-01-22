@extends('adminlte::page')

@section('title', 'Usuario sin propietario')


@section('content')
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    
   
    <div class="login-logo">
        <img class="Logo" style="border-radius:20px"  src="../vendor/adminlte/dist/img/LogoProyecto2.png" alt="" width='150' height="150">
    </div>

    <h2 class="text-center font-weight-Helvetica w-responsive mx-auto my-4">  El usuario no posee ningun propietario enlazado </h2> 

    <h5 class="text-center font-weight-Helvetica w-responsive mx-auto my-4"> Contactese con el Administrador </h5>
    
    <p class="text-center font-weight-Helvetica"><i class="fas fa-envelope"></i> &nbsp Admin@Admin.com </p>

    <p class="text-center font-weight-Helvetica"><i class="fab fa-whatsapp"></i> &nbsp +56912345678 </p>



</body>

</html>

@stop
