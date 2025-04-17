@extends('layouts.auth-master')

@section('content')
<div class="container vh-100 d-flex justify-content-center align-items-center">
    <div class="w-100" style="max-width: 400px;">
        <form method="post" action="{{ route('register.perform') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <img class="mb-4 mx-auto d-block" src="{!! url('images/alfamanagerlogo.webp') !!}" alt="" width="72" height="57">
            
            <h1 class="h3 mb-3 fw-normal text-center">Cadastre-se</h1>

            <div class="form-group form-floating mb-3">
                <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="name@example.com" required autofocus>
                <label for="floatingEmail">Endereço de e-mail</label>
                @if ($errors->has('email'))
                    <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                @endif
            </div>

            <div class="form-group form-floating mb-3">
                <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required>
                <label for="floatingName">Usuário</label>
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

            <div class="form-group form-floating mb-3">
                <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
                <label for="floatingConfirmPassword">Confirme sua senha</label>
                @if ($errors->has('password_confirmation'))
                    <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
                @endif
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit">Criar conta</button>

            @include('auth.partials.copy')
        </form>
    </div>
</div>
@endsection
