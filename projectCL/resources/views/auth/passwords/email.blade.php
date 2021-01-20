<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Nuevo Collao | Recuperar contraseña</title>
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

<body class="hold-transition register-page">
    <div class="register-box">
        

        <div class="row align-items-center ">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body login-card-body " style="width: 350px;">
                        <p class="login-box-msg">Recuperar Contraseña</p>
                    
                    
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="input-group mb-3">
                                <div class="input-group mb-3">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}"  placeholder="Correo" required autocomplete="email" autofocus>
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-envelope"></span>
                                            </div>
                                        </div>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Correo no existente</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                    <button type="submit" class="btn btn-primary ml-auto"  style="float: right;" >
                                        {{ __('Recuperar') }}
                                    </button>
                                </div>
                            
                        </form>
                </div>
            </div>
        </div>
    </div>

</html>
