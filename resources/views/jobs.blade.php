@extends('layouts.simple')

@section('content')
    <div class="jobs">
        <aside class="filters">
            <div class="wrapper">
                <div class="container">
                    <form class="form" action="">
                        <fieldset class="fieldset">
                            <label class="label" for="job_name">
                                Nome da vaga
                            </label>
                            <input
                                id="job_name"
                                class="input"
                                type="text"
                                placeholder="Digite o nome da vaga"
                            />
                        </fieldset>
                        <fieldset class="fieldset">
                            <label class="label" for="categories">
                                Categorias
                            </label>
                            <select
                                class="input"
                                name="categories"
                                id="categories"
                            >
                                <option value="" selected disabled>
                                    Escolha uma categoria
                                </option>
                                <option value="">Todas</option>
                                <option value="V">V</option>
                            </select>
                        </fieldset>
                        <fieldset class="fieldset">
                            <label class="label" for="state">
                                Estado
                            </label>
                            <select
                                class="input"
                                name="state"
                                id="state"
                            >
                                <option value="" selected disabled>
                                    Escolha um estado
                                </option>
                                <option value="">Todas</option>
                                <option value="V">V</option>
                            </select>
                        </fieldset>
                        <fieldset class="fieldset">
                            <label class="label" for="city">
                                Cidade
                            </label>
                            <select
                                class="input"
                                name="city"
                                id="city"
                            >
                                <option value="" selected disabled>
                                    Escolha um cidade
                                </option>
                                <option value="">Todas</option>
                                <option value="V">V</option>
                            </select>
                        </fieldset>
                        <fieldset class="fieldset">
                            <label class="label" for="contract_type">
                                Regime de contratação
                            </label>
                            <select
                                class="input"
                                name="contract_type"
                                id="contract_type"
                            >
                                <option value="" selected disabled>
                                    Escolha o tipo de contratação
                                </option>
                                <option value="">Todas</option>
                                <option value="V">V</option>
                            </select>
                        </fieldset>
                        <button class="button primary">
                            Buscar
                        </button>
                    </form>

                </div>
            </div>
        </aside>
        <section class="list">
            <div class="wrapper">
                <div class="container">
                    <div class="card-container">
                        <div class="card jobs-container">
                            <p class="title">
                                Auxiliar administrativo
                            </p>
                            <p class="subtitle">
                                Cobasi Pet shop, Caraguatatuba, São Paulo
                            </p>
                            <p class="subtitle">
                                CLT, Salário a combinar
                            </p>
                            <p class="description">
                                Auxilia diversas áreas de uma organização nas rotinas de digitação, arquivo de documentos, distribuição de correspondência e serviços externos. Elabora relatórios e planilhas de controle.
                            </p>
                            <a href="#" class="button outline">
                                ver detalhes da vaga
                            </a>
                        </div>
                        <div class="card jobs-container">
                            <p class="title">
                                Auxiliar administrativo
                            </p>
                            <p class="subtitle">
                                Cobasi Pet shop, Caraguatatuba, São Paulo
                            </p>
                            <p class="subtitle">
                                CLT, Salário a combinar
                            </p>
                            <p class="description">
                                Auxilia diversas áreas de uma organização nas rotinas de digitação, arquivo de documentos, distribuição de correspondência e serviços externos. Elabora relatórios e planilhas de controle.
                            </p>
                            <a href="#" class="button outline">
                                ver detalhes da vaga
                            </a>
                        </div>
                        <div class="card jobs-container">
                            <p class="title">
                                Auxiliar administrativo
                            </p>
                            <p class="subtitle">
                                Cobasi Pet shop, Caraguatatuba, São Paulo
                            </p>
                            <p class="subtitle">
                                CLT, Salário a combinar
                            </p>
                            <p class="description">
                                Auxilia diversas áreas de uma organização nas rotinas de digitação, arquivo de documentos, distribuição de correspondência e serviços externos. Elabora relatórios e planilhas de controle.
                            </p>
                            <a href="#" class="button outline">
                                ver detalhes da vaga
                            </a>
                        </div>
                        <div class="card jobs-container">
                            <p class="title">
                                Auxiliar administrativo
                            </p>
                            <p class="subtitle">
                                Cobasi Pet shop, Caraguatatuba, São Paulo
                            </p>
                            <p class="subtitle">
                                CLT, Salário a combinar
                            </p>
                            <p class="description">
                                Auxilia diversas áreas de uma organização nas rotinas de digitação, arquivo de documentos, distribuição de correspondência e serviços externos. Elabora relatórios e planilhas de controle.
                            </p>
                            <a href="#" class="button outline">
                                ver detalhes da vaga
                            </a>
                        </div>
                        <div class="card jobs-container">
                            <p class="title">
                                Auxiliar administrativo
                            </p>
                            <p class="subtitle">
                                Cobasi Pet shop, Caraguatatuba, São Paulo
                            </p>
                            <p class="subtitle">
                                CLT, Salário a combinar
                            </p>
                            <p class="description">
                                Auxilia diversas áreas de uma organização nas rotinas de digitação, arquivo de documentos, distribuição de correspondência e serviços externos. Elabora relatórios e planilhas de controle.
                            </p>
                            <a href="#" class="button outline">
                                ver detalhes da vaga
                            </a>
                        </div>
                        <div class="card jobs-container">
                            <p class="title">
                                Auxiliar administrativo
                            </p>
                            <p class="subtitle">
                                Cobasi Pet shop, Caraguatatuba, São Paulo
                            </p>
                            <p class="subtitle">
                                CLT, Salário a combinar
                            </p>
                            <p class="description">
                                Auxilia diversas áreas de uma organização nas rotinas de digitação, arquivo de documentos, distribuição de correspondência e serviços externos. Elabora relatórios e planilhas de controle.
                            </p>
                            <a href="#" class="button outline">
                                ver detalhes da vaga
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="wrapper">
            <div class="container">
                <nav>
                    <ul class="pagination">
                        <li class="item">
                            <a class="link disabled" href="#">Anterior</a>
                        </li>
                        <li class="item">
                            <a class="link" href="#">1</a>
                        </li>
                        <li class="item">
                            <a class="link" href="#">2</a>
                        </li>
                        <li class="item">
                            <a class="link" href="#">Próximo</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection
