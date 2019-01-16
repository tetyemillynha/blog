@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verificar seu endereço de e-mail') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Um link de verificação foi enviado para o e-mail cadastrado!') }}
                        </div>
                    @endif

                    {{ __('Por favor, verique o link que enviamos para o e-mail cadastrado.') }}
                    {{ __('Se você não recebeu o e-mail,') }}, <a href="{{ route('verification.resend') }}">{{ __('clique aqui para reenviar.') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
