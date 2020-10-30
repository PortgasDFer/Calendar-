@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="login-wrap">
        <div class="login-content">
            <div class="login-logo">
                <a href="/">
                    <img src="images/Logo-azul.png" alt="CoolAdmin">
                </a>
                <h1>Iniciar sesión</h1>
            </div>
            
            <div class="login-form mt-2">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label>Email</label>
                        <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                    </div>
                     <div class="login-checkbox">
                        <label>
                            <input type="checkbox" name="remember">Recuerdame
                        </label>
                        <label>
                            <a href="#">¿Olvidaste tu contraseña?</a>
                        </label>
                    </div>
                    <button class="au-btn au-btn--block btn_2 m-b-20" type="submit">Iniciar sesión</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
