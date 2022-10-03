@extends('errors::minimal')
@section('content')
    <div class="col-12 text-center mb-4">
        <img src="{{ asset('assets/img/auth-403.svg') }}" class="w240 mb-4" alt="">
        <h1 class="display-1">403</h1>
        <h5>Acceso denegado</h5>
        <span class="text-muted">No tienes los permisos necesarios para acceder a los recursos solicitados.</span>
    </div>
@endsection
