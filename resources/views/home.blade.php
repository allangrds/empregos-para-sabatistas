@extends('layouts.simple')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <div class="home">
        <div class="wrapper">
            <div class="container">
                <div class="call-to-action">
                    <h1 class="title">
                        <strong>Vagas</strong> certeiras pra quem <strong>guarda o sábado</strong>
                    </h1>
                    <p class="subtitle">
                        Em até 10 dias, alocamos um squad de produto de alta performance para descobrir e desenvolver seu produto digital ou partes dele.
                    </p>
                    <a class="button primary" href="{{ route('user.jobs') }}">
                        ver vagas
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
