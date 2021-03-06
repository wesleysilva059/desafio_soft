@extends('layouts.app')
@section('content')
<div class="auth-card">
    <div class="title">
        List Books
    </div>

    @if(session('status'))
        <div class="alert success">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <label class="block">
            <span class="text-gray-700 text-sm">E-mail</span>
            <input type="email" name="email" class="form-input mt-1 block w-full rounded-md focus:border-indigo-600{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" autofocus required>
            @if($errors->has('email'))
                <p class="invalid-feedback">{{ $errors->first('email') }}</p>
            @endif
        </label>

        <div class="mt-6">
            <button type="submit" class="button">
                Resetar a Senha
            </button>
        </div>
    </form>
</div>
@endsection