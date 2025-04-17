@extends('layouts.auth-master')

@section('content')
<div class="d-flex align-items-center justify-content-center min-vh-100 bg-light">
    <form method="POST" action="{{ route('senha.redefinir') }}" class="bg-white shadow rounded p-4 p-sm-5 w-100" style="max-width: 420px;">
        @csrf

        <div class="text-center mb-4">
            <img src="{!! url('images/alfamanagerlogo.webp') !!}" alt="Logo" width="72" height="57" class="mb-2">
            <h1 class="h4 fw-bold">Redefinir Senha</h1>
        </div>

        @include('layouts.partials.messages')

        <input type="hidden" name="token" value="{{ $token }}">

        <div class="form-floating mb-3">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" value="{{ old('email') }}" required>
            <label for="email">Email</label>
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Nova senha" required>
            <label for="password">Nova Senha</label>
            @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Confirme a senha" required>
            <label for="password_confirmation">Confirmar Senha</label>
        </div>

        <button type="submit" class="btn btn-primary w-100 btn-lg">Redefinir Senha</button>

        <div class="text-center mt-4">
            <a href="{{ route('login.show') }}" class="small text-decoration-none text-muted">Voltar ao login</a>
        </div>

        @include('auth.partials.copy')
    </form>
</div>
@endsection
