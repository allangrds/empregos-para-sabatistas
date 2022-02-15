@extends('layouts.simple')

@section('content')
    <div class="home">
        <div class="wrapper">
            <div class="container">
                <section class="call-to-action">
                    <h2 class="title">
                        As <strong>vagas</strong> certas pra quem <strong>guarda o sábado</strong>
                    </h2>
                    <p class="subtitle">
                        Está procurando um emprego no sábado? Está contratando e essa vaga respeita o sábado? Aqui é o lugar!
                    </p>
                    <a class="button primary" href="{{ route('user.jobs') }}">
                        ver vagas
                    </a>
                </section>
            </div>
        </div>
        <section class="how-it-works">
            <div class="wrapper">
                <div class="container">
                    <h3 class="title">
                        Como funciona?
                    </h3>
                    <div class="card-container">
                        <div class="card">
                            <p class="topic">
                                1. Cadastro e análise da vaga
                            </p>
                            <p class="description">
                                Qualquer pessoa ou empresa consegue publicar uma vaga de trabalho. Feito isso, essa vaga irá pra uma lista de análise para determinar se ela é válida ou não.
                            </p>
                        </div>
                        <div class="card">
                            <p class="topic">
                                2. Pesquisa de vagas
                            </p>
                            <p class="description">
                                Aprovada a vaga, ela estará disponível para pesquisa no site. O usuário poderá consultar as vagas em sua região e ver como se candidatar.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
