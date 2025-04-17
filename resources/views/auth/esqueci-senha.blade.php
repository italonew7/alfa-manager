@extends('layouts.auth-master')

@section('content')
<div class="d-flex align-items-center justify-content-center min-vh-100 bg-light">
    <form method="POST" action="{{ route('senha.enviar') }}" class="bg-white shadow rounded p-4 p-sm-5 w-100" style="max-width: 420px;">
        @csrf

        <div class="text-center mb-4">
            <img src="{!! url('images/alfamanagerlogo.webp') !!}" alt="Logo" width="72" height="57" class="mb-2">
            <h1 class="h4 fw-bold">Recuperar Senha</h1>
            <p class="text-muted small">Informe seu e-mail para receber um link de redefinição.</p>
        </div>

        @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="form-floating mb-3">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" value="{{ old('email') }}" required autofocus>
            <label for="email">Email</label>
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary w-100 btn-lg">Enviar link</button>

        <div class="text-center mt-4">
            <a href="{{ route('login.show') }}" class="small text-decoration-none text-muted">Voltar ao login</a>
        </div>

        @include('auth.partials.copy')
    </form>
</div>
@endsection
