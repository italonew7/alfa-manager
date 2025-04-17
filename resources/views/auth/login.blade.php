@extends('layouts.auth-master')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>

@section('content')
<div class="d-flex align-items-center justify-content-center min-vh-100">
    <form method="post" action="{{ route('login.perform') }}" class="w-100" style="max-width: 400px;">
        @csrf

        <img class="mb-4" src="{!! url('images/alfamanagerlogo.webp') !!}" alt="" width="72" height="57">

        <h1 class="h3 mb-3 fw-normal text-center">Entrar</h1>

        @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required autofocus>
            <label for="floatingName">Email ou Usuário</label>
            @if ($errors->has('username'))
                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
            <label for="floatingPassword">Senha</label>
            @if ($errors->has('password'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
            @endif
        </div>

        <!-- Remember Me and Forgot Password -->
        <div class="d-flex justify-content-between align-items-center mb-3">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">
                    Lembre de mim
                </label>
            </div>
            <a href="{{ route('senha.show') }}" style="color:#6b7280; text-decoration: none;">Esqueci a senha?</a>
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Entrar</button>

        <div class="flex items-center justify-center gap-1 text-sm text-gray-500 dark:text-gray-400 mt-3" style="color:#6b7280;">
        Não tem uma conta?
        <a class="text-gray-600 rounded-md hover:underline dark:text-gray-300 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('register.show') }}" style="color:#6b7280; text-decoration: none;">
        Registrar
        </a>
</div>


        @include('auth.partials.copy')
    </form>
</div>
@endsection