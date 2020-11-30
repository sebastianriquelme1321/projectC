<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Registration Page</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Confirmar Correo Electronico') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('Un nuevo enlace de verificacion a sido enviado a ') }}
                        <strong>{{auth()->user()->email}}</strong>

                    </div>
                    @endif

                    {{ __('Busque en el Buzon de su correo') }} <strong>{{auth()->user()->email}}</strong>
                    {{ __('un mensaje enviado desde la direccion') }} <Strong>APPRegistroNuevoCollao@gmail.com</Strong>
                    {{ __('que contiene los datos para la verificacion. ') }}
                    {{ __('Es posible que el mensaje haya sido enviado a la carpeta SPAM o similar.') }}
                    <br>
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit"
                            class="btn btn-link p-0 m-0 align-baseline">{{ __('Enviar un nuevo enlace de verificacion') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</html>
