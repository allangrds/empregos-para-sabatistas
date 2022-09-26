@extends('layouts.simple')

@section('content')
    <div class="wrapper">
        <div class="container">
            <h1 class="title">
                Dúvidas
            </h1>
            <h2 class="subtitle">
                perguntas frequentes e suas respostas
            </h2>
            <div class="faq">
                <h3 class="title">
                    Pesquisa de vagas
                </h3>
                <div class="category">
                    <div class="accordion">
                        <button class="button">
                            <img class="illustration-plus" src="{{ asset('images/plus.svg') }}" alt="Expandir" />
                            <img class="illustration-minus display-none" src="{{ asset('images/minus.svg') }}"
                                alt="Expandir" />
                            <p class="text">Onde consigo ver as vagas disponíveis?</p>
                        </button>
                        <div class="content display-none">
                            <ul>
                                <li>
                                    <p>Acesse <a href="{{ route('user.jobs') }}"> aqui</a></p>
                                </li>
                                <li>
                                    <p>
                                        Você verá a lista de vagas disponíveis. Para procurar uma vaga mais específica, use
                                        os filtros da página
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="accordion">
                        <button class="button">
                            <img class="illustration-plus" src="{{ asset('images/plus.svg') }}" alt="Expandir" />
                            <img class="illustration-minus display-none" src="{{ asset('images/minus.svg') }}"
                                alt="Expandir" />
                            <p class="text">Como posso me candidatar para uma vaga?</p>
                        </button>
                        <div class="content display-none">
                            <ul>
                                <li>
                                  <p>
                                    Acesse a página de vagas<a href="{{ route('user.jobs') }}"> aqui</a>
                                  </p>
                                </li>
                                <li>
                                  <p>
                                    Ao encontrar uma vaga que te interessou, clique em "ver detalhes da vaga"
                                  </p>
                                </li>
                                <li>
                                  <p>
                                    Procure por "Como se candidatar" e siga o que estiver ali escrito
                                  </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="accordion">
                      <button class="button">
                          <img class="illustration-plus" src="{{ asset('images/plus.svg') }}" alt="Expandir" />
                          <img class="illustration-minus display-none" src="{{ asset('images/minus.svg') }}"
                              alt="Expandir" />
                          <p class="text">Não achei uma vaga. O que isso significa?</p>
                      </button>
                      <div class="content display-none">
                        <p>
                          Nosso site não publica as vagas. São pessoas e empresas que acessam nosso site e as preenchem. Por conta disso, pode acontecer de não ter uma vaga como você procura.
                        </p>
                      </div>
                    </div>
                    <div class="accordion">
                      <button class="button">
                          <img class="illustration-plus" src="{{ asset('images/plus.svg') }}" alt="Expandir" />
                          <img class="illustration-minus display-none" src="{{ asset('images/minus.svg') }}"
                              alt="Expandir" />
                          <p class="text">Ainda não achei resposta para minha pergunta. O que eu faço?</p>
                      </button>
                      <div class="content display-none">
                        <p>
                          Envie um e-mail para <strong>contato@empregosparasabatistas.com.br</strong>.
                        </p>
                      </div>
                    </div>
                </div>

                <h3 class="title">
                    Publicação de vagas
                </h3>
                <div class="category">
                  <div class="accordion">
                    <button class="button">
                        <img class="illustration-plus" src="{{ asset('images/plus.svg') }}" alt="Expandir" />
                        <img class="illustration-minus display-none" src="{{ asset('images/minus.svg') }}"
                            alt="Expandir" />
                        <p class="text">Preciso pagar para publicar uma vaga?</p>
                    </button>
                    <div class="content display-none">
                      <p>
                        <strong>Não!</strong> O site é totalmente gratuito.
                      </p>
                    </div>
                  </div>
                  <div class="accordion">
                    <button class="button">
                        <img class="illustration-plus" src="{{ asset('images/plus.svg') }}" alt="Expandir" />
                        <img class="illustration-minus display-none" src="{{ asset('images/minus.svg') }}"
                            alt="Expandir" />
                        <p class="text">Publiquei uma vaga. Por qual razão ela não aparece no site?</p>
                    </button>
                    <div class="content display-none">
                      <p>
                        Após a criação da vaga, ela passa por uma análise para verificar se não existe algum erro de digitação ou outro tipo de erro. Feito isso, sua vaga ficará visível para todos.
                      </p>
                    </div>
                  </div>
                  <div class="accordion">
                    <button class="button">
                        <img class="illustration-plus" src="{{ asset('images/plus.svg') }}" alt="Expandir" />
                        <img class="illustration-minus display-none" src="{{ asset('images/minus.svg') }}"
                            alt="Expandir" />
                        <p class="text">Ainda não achei resposta para minha pergunta. O que eu faço?</p>
                    </button>
                    <div class="content display-none">
                      <p>
                        Envie um e-mail para <strong>contato@empregosparasabatistas.com.br</strong>.
                      </p>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
@endsection
