@extends('errors::minimal')

@section('content')
    <div class="col-12 text-center mb-4">
        <img src="{{ asset('assets/img/auth-500.svg') }}" class="w240 mb-4" alt="">
        <h1 class="display-1">500</h1>
        <h5>Error desde Servidor</h5>
        <span class="text-muted">El servidor tuvo problemas, intentalo mas tarde.</span>
    </div>
@endsection
