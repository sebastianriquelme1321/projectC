@extends('adminlte::page')

@section('title', 'Contacto')

@section('content_header')
   

@stop

@section('content')
    
<body>
    <div class="login-logo">
        <img class="Logo" style="border-radius:20px"  src="../vendor/adminlte/dist/img/LogoProyecto2.png" alt="" width='150' height="150">
    </div>
    
    <h2 class="text-center font-weight-Helvetica w-responsive mx-auto my-4"> Informacion de contacto Administrador </h2> 

    <h5 class="text-center font-weight-Helvetica w-responsive mx-auto my-4"> Cualquier duda o consulta contactar al administrador - Horario de cosultas 10:00 - 20:00 </h5>
    
    <p class="text-center font-weight-Helvetica"><i class="fas fa-envelope"></i> &nbsp Admin@Admin.com </p>

    <p class="text-center font-weight-Helvetica"><i class="fab fa-whatsapp"></i> &nbsp +56912345678 </p>

    <p class="text-center font-weight-Helvetica"><i class="fab fa-instagram"></i> &nbsp Instagram_Adminstrador </p>

    <p class="text-center font-weight-Helvetica"><i class="fab fa-facebook"></i> &nbsp Facebook_Administrador </p>


</body>



@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    {{--  <script> console.log('Hi!'); </script>  --}}
@stop

