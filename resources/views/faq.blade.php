@extends('layouts.simple')

@section('head')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
@endsection

@section('content')
    <div class="faq">
        <div class="wrapper">
            <div class="container">
                <div class="card">
                    <h1 class="title">
                        Vagas
                    </h1>
                    <div class="accordion">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingJobsOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseJobsOne" aria-expanded="true" aria-controls="collapseJobsOne">
                              Onde consigo ver as vagas disponíveis?
                            </button>
                          </h2>
                          <div id="collapseJobsOne" class="accordion-collapse collapse show" aria-labelledby="headingJobsOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul>
                                    <li>
                                        <p>
                                            Acesse <a href="{{ route('user.jobs') }}"> aqui</a>
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            Você verá a lista de vagas disponíveis. Para procurar uma vaga mais específica, use os filtros da página
                                        </p>
                                    </li>
                                </ul>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingJobsTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsJobseTwo" aria-expanded="false" aria-controls="collapsJobseTwo">
                                    Como posso me candidatar para uma vaga?
                                </button>
                            </h2>
                            <div id="collapsJobseTwo" class="accordion-collapse collapse" aria-labelledby="headingJobsTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
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
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingJobsThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseJobsThree" aria-expanded="false" aria-controls="collapseJobsThree">
                                    Não achei uma vaga. O que isso significa?
                                </button>
                            </h2>
                            <div id="collapseJobsThree" class="accordion-collapse collapse" aria-labelledby="headingJobsThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Nosso site não publica as vagas. São pessoas e empresas que acessam nosso site e as preenchem. Por conta disso, pode acontecer de não ter uma vaga como você procura.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingJobsFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseJobsFour" aria-expanded="false" aria-controls="collapseJobsFour">
                                    Ainda não achei resposta para minha pergunta. O que eu faço?
                                </button>
                            </h2>
                            <div id="collapseJobsFour" class="accordion-collapse collapse" aria-labelledby="headingJobsFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Envie um e-mail para <strong>contato@empregosparasabatistas.com.br</strong>.
                                </div>
                            </div>
                        </div>
                    </div>
                    <h1 class="title">
                        Publicar vagas
                    </h1>
                    <div class="accordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingPublishJobsOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePublishJobsOne" aria-expanded="false" aria-controls="collapsePublishJobsOne">
                                    Preciso pagar para publicar uma vaga?
                                </button>
                            </h2>
                            <div id="collapsePublishJobsOne" class="accordion-collapse collapse" aria-labelledby="headingPublishJobsOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Não!</strong> O site é totalmente gratuito.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingPublishJobsTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePublishJobsTwo" aria-expanded="false" aria-controls="collapsePublishJobsTwo">
                                    Publiquei uma vaga. Por qual razão ela não aparece no site?
                                </button>
                            </h2>
                            <div id="collapsePublishJobsTwo" class="accordion-collapse collapse" aria-labelledby="headingPublishJobsTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Após a criação da vaga, ela passa por uma análise, para verificar se não existe algum erro de digitação. Feito isso, sua vaga ficará visível para todos.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingPublishJobsThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePublishJobsThree" aria-expanded="false" aria-controls="collapsePublishJobsThree">
                                    Ainda não achei resposta para minha pergunta. O que eu faço?
                                </button>
                            </h2>
                            <div id="collapsePublishJobsThree" class="accordion-collapse collapse" aria-labelledby="headingPublishJobsThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Envie um e-mail para <strong>contato@empregosparasabatistas.com.br</strong>.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
@endsection
