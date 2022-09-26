@extends('layouts.simple')

@section('content')
  <div class="wrapper">
    <div class="container">
      <div class="home">
        <div class="call-to-action">
          <div>
            <h1 class="title">
              Vagas para quem guarda o sábado
            </h1>
            <h2 class="subtitle">
              Seja pra você que guarda o sábado ou pra você que tem uma empresa e respeita esse dia
            </h1>
            <a class="button" href="{{ route('user.jobs') }}">
              Ver vagas
            </a>
          </div>
          <img
            class="illustration"
            src="{{ asset('images/eastwood-logged-out.png') }}"
            alt="Pessoa em um escritório com o por do sol atrás"
          />
        </div>
        <div>
          <h2 class="title">Como publicar uma vaga</h2>
          <h3 class="subtitle">veja como é simples publicar uma vaga</h3>
          <div class="steps-to-publish">
            <div class="card step">
              <p class="number">1.</p>
              <div>
                <p class="title">
                  Cadastro da vaga
                </p>
                <p class="description">
                  Você cadastra sua vaga e ela vai pra uma fila de análise.
                </p>
              </div>
            </div>
            <div class="card step">
              <p class="number">2.</p>
              <div>
                <p class="title">
                  Análise da vaga
                </p>
                <p class="description">
                  As informações da sua vaga são analisadas.
                </p>
              </div>
            </div>
            <div class="card step">
              <p class="number">3.</p>
              <div>
                <p class="title">
                  Publicação da vaga
                </p>
                <p class="description">
                  Finalizada a análise, sua vaga é aprovada e visível em nosso site.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
