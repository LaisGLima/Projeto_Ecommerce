@extends('layouts.login')

@section('content')
<body class="antialiased" >
    <div class="login-card-container">
        <div class="login-card">
            <div class="login-card-logo">
                <img src="/imagens/perfil.png" alt="logo">
            </div>
            <div class="login-card-header">
                <h1>Login</h1>
                <h5> Entrar na área de usuário </h5>
            </div>
            <form class="login-card-form" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-item">
                    <img src="/imagens/mail.png">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-item">
                    <img src="/imagens/lock.png" alt="senha">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
                <div class="form-item-other">
                    <div class="checkbox">
                        <input class="lembra" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label for="lembra">Lembre-se de mim</label>
                    </div>

                    <a href="#">Esqueci minha senha</a>
                </div>
                <button type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                </button>
            </form>
            <div class="login-card-footer">
                Não tem conta de usuário? <a href="register">Crie sua conta grátis</a>
            </div>
        </div>
    </div>
        
</body>
@endsection
