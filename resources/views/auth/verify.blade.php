@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifique seu Endereço de E-mail') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Um link de verificação foi enivado para o endereço de E-mail.') }}
                        </div>
                    @endif

                    {{ __('Antes de continuar, acesse seu E-mail para obter o link de alteração.') }}
                    {{ __('Não recebeu o email?') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Clique aqui para enviar novamente') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
