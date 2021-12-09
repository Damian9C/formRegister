@extends('layouts.app')

<style>
    .loginTitle{
        width: 100%;
        text-align: center;
        font-size: 1.5rem;
        font-weight: bold;
        margin: 1rem 0 .5rem;
    }

    .loginActions{
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .loginActions__btn{
        background-color: #996AFA;
        color: #ffffff;
        margin-right: 1rem;
        border: none;
        padding: 10px;
        border-radius: 10px;
    }
</style>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="form card border-light shadow-sm">
                <div class="loginTitle">
                    Iniciar Sesión
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-floating mb-3">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            <label for="email">Correo electrónico</label>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            <label for="password">Contraseña</label>

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="row mb-0">
                            <div class="loginActions">
                                <button class="loginActions__btn" type="submit">
                                    Iniciar Sesión
                                </button>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        Recordar
                                    </label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
