@extends('adminlte::master')


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
