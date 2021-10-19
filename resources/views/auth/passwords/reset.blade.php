@extends('layouts.app')
@section('content')
<div class="auth-card">
    <div class="title">
        List Books
    </div>

    @if(session('message'))
        <div class="alert success">
            {{ session('message') }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.request') }}">
        @csrf
        <input name="token" value="{{ $token }}" type="hidden">

        <label class="block">
            <span class="text-gray-700 text-sm">E-mail</span>
            <input type="email" name="email" class="form-input{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ $email ?? old('email') }}" autofocus required>
            @if($errors->has('email'))
                <p class="invalid-feedback">{{ $errors->first('email') }}</p>
            @endif
        </label>

        <label class="block mt-3">
            <span class="text-gray-700 text-sm">Senha</span>
            <input type="password" name="password" class="form-input{{ $errors->has('password') ? ' is-invalid' : '' }}" required>
            @if($errors->has('password'))
                <p class="invalid-feedback">{{ $errors->first('password') }}</p>
            @endif
        </label>

        <label class="block mt-3">
            <span class="text-gray-700 text-sm">Repetir a senha</span>
            <input type="password" name="password_confirmation" class="form-input" required>
        </label>

        <div class="mt-6">
            <button type="submit" class="button">
                Resetar Senha
            </button>
        </div>
    </form>
</div>
@endsection