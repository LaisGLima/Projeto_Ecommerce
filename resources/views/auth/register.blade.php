@extends('layouts.register')

@section('content')
<body>
    <div class="form-box">
        <h2>Criar Conta</h2>
        <p>Já possui login? <a href="login"> Login </a> </p>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="input-group">
                <label for="nome">Nome Completo</label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="input-group">
                <label for="email">E-mail</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="input-group w50">
                <label for="senha">Senha</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="input-group w50">
                <label for="confirmarsenha">Confirmar Senha</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
            <div class="input-group">
            <button type="submit" class="btn btn-primary">
                {{ __('Register') }}
            </button>
            </div>
        </form>
    </div>
</body>

@endsection
