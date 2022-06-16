@extends('layouts.simple')

@section('head')
    {!! htmlScriptTagJsApi() !!}
@endsection

@section('content')
    <div class="publish_jobs">
        <div class="wrapper">
            <div class="container">
                @if($errors->has('page_error'))
                    <div class="alert error">
                        <p>{{ $errors->first('page_error') }}</p>
                    </div>
                @endif
                @if(Session::has('page_success'))
                    <div class="alert success">
                        <p>{{ Session::get('page_success') }}</p>
                    </div>
                @endif

                <div class="card">
                    <h1 class="title">
                        Publique uma vaga
                    </h1>
                    <h2 class="subtitle">
                        Preencha os dados da vaga e aguarde a aprovação
                    </h2>
                    <form class="form" method="POST" action="{{ route('user.publish_jobs_post') }}">
                        @csrf

                        <div class="fieldset-container">
                            <fieldset class="fieldset">
                                <label class="label" for="job_name">
                                    Nome da vaga
                                </label>
                                <input
                                    id="job_name"
                                    name="job_name"
                                    class="input"
                                    type="text"
                                    placeholder="Digite o nome da vaga"
                                    value="{{ old('job_name') }}"
                                />
                                <p class="error_message">
                                    @if($errors->has('job_name'))
                                        {{ $errors->first('job_name') }}
                                    @endif
                                </p>
                            </fieldset>
                            <fieldset class="fieldset">
                                <label class="label" for="category">
                                    Categoria
                                </label>
                                <select
                                    class="input"
                                    name="category_id"
                                    id="category"
                                    name="category"
                                >
                                    <option value="" {{ old('category_id') === "" ? "selected" : "" }}>Escolha uma categoria</option>
                                    @foreach ($categories as $category)
                                        <option
                                            value={{ $category['id'] }}
                                            {{ old('category_id') == $category['id'] ? "selected" : "" }}
                                        >
                                            {{ $category['text'] }}
                                        </option>
                                    @endforeach
                                </select>
                                <p class="error_message">
                                    @if($errors->has('category_id'))
                                        {{ $errors->first('category_id') }}
                                    @endif
                                </p>
                            </fieldset>
                        </div>
                        <fieldset class="fieldset">
                            <label class="label" for="description">
                                Descrição
                            </label>
                            <textarea
                                class="input textarea"
                                name="description"
                                id="description"
                                placeholder="Digite a descrição da vaga"
                            >{{ old('description') }}</textarea>
                            <p class="error_message">
                                @if($errors->has('description'))
                                    {{ $errors->first('description') }}
                                @endif
                            </p>
                        </fieldset>
                        <div class="fieldset-container">
                            <fieldset class="fieldset">
                                <label class="label" for="company_name">
                                    Nome da empresa
                                </label>
                                <input
                                    id="company_name"
                                    name="company_name"
                                    class="input"
                                    type="text"
                                    placeholder="Digite o nome da empresa"
                                    value="{{ old('company_name') }}"
                                />
                                <p class="error_message">
                                    @if($errors->has('company_name'))
                                        {{ $errors->first('company_name') }}
                                    @endif
                                </p>
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
                                    <option value="" {{ old('contract_type') === "" ? "selected" : "" }}>
                                        Escolha uma das opções
                                    </option>
                                    @foreach ($contractTypes as $contractType)
                                        <option
                                            value={{ $contractType['name'] }}
                                            {{ old('contract_type') === $contractType['name'] ? "selected" : "" }}
                                        >
                                            {{ $contractType['text'] }}
                                        </option>
                                    @endforeach
                                </select>
                                <p class="error_message">
                                    @if($errors->has('contract_type'))
                                        {{ $errors->first('contract_type') }}
                                    @endif
                                </p>
                            </fieldset>
                        </div>
                        <div class="fieldset-container">
                            <fieldset class="fieldset">
                                <label class="label" for="allocation">
                                    Alocação
                                </label>
                                <select
                                    class="input"
                                    name="allocation"
                                    id="allocation"
                                >
                                    <option value="" {{ old('allocation') === "" ? "selected" : "" }}>
                                        Escolha uma das opções
                                    </option>
                                    @foreach ($allocations as $allocation)
                                        <option
                                            value={{ $allocation['name'] }}
                                            {{ old('allocation') === $allocation['name'] ? "selected" : "" }}
                                        >
                                            {{ $allocation['text'] }}
                                        </option>
                                    @endforeach
                                </select>
                                <p class="error_message">
                                    @if($errors->has('allocation'))
                                        {{ $errors->first('allocation') }}
                                    @endif
                                </p>
                            </fieldset>
                            <fieldset class="fieldset">
                                <label class="label" for="working_time">
                                    Período de trabalho
                                </label>
                                <input
                                    id="working_time"
                                    name="working_time"
                                    class="input"
                                    type="text"
                                    placeholder="Ex: Seg/Sexta 8:00 às 18:00"
                                    value="{{ old('working_time') }}"
                                />
                                <p class="error_message">
                                    @if($errors->has('working_time'))
                                        {{ $errors->first('working_time') }}
                                    @endif
                                </p>
                            </fieldset>
                        </div>
                        <fieldset class="fieldset">
                            <label class="label" for="responsabilities">
                                Responsabilidades
                            </label>
                            <textarea
                                class="input textarea"
                                name="responsabilities"
                                id="responsabilities"
                                placeholder="Digite as responsabilidades"
                            >{{ old('responsabilities') }}</textarea>
                            <p class="error_message">
                                @if($errors->has('responsabilities'))
                                    {{ $errors->first('responsabilities') }}
                                @endif
                            </p>
                        </fieldset>
                        <fieldset class="fieldset">
                            <label class="label" for="requirements">
                                Requisitos
                            </label>
                            <textarea
                                class="input textarea"
                                name="requirements"
                                id="requirements"
                                placeholder="Digite os requisitos"
                            >{{ old('requirements') }}</textarea>
                            <p class="error_message">
                                @if($errors->has('requirements'))
                                    {{ $errors->first('requirements') }}
                                @endif
                            </p>
                        </fieldset>
                        <fieldset class="fieldset">
                            <label class="label" for="differential">
                                Diferencial
                            </label>
                            <textarea
                                class="input textarea"
                                name="differential"
                                id="differential"
                                placeholder="Digite o que será um diferencial"
                            >{{ old('differential') }}</textarea>
                            <p class="error_message">
                                @if($errors->has('differential'))
                                    {{ $errors->first('differential') }}
                                @endif
                            </p>
                        </fieldset>
                        <fieldset class="fieldset">
                            <label class="label" for="salary">
                                Salário
                            </label>
                            <input
                                id="salary"
                                name="salary"
                                class="input"
                                type="number"
                                placeholder="Digite o salário"
                                value="{{ old('salary') }}"
                            />
                            <p class="error_message">
                                @if($errors->has('salary'))
                                    {{ $errors->first('salary') }}
                                @endif
                            </p>
                        </fieldset>
                        <div class="fieldset-container">
                            <fieldset class="fieldset">
                                <label class="label" for="initial_salary">
                                    Faixa salarial inicial(caso o valor possa variar)
                                </label>
                                <input
                                    id="initial_salary"
                                    name="initial_salary"
                                    class="input"
                                    type="number"
                                    placeholder="Digite o salário"
                                    value="{{ old('initial_salary') }}"
                                />
                                <p class="error_message">
                                    @if($errors->has('initial_salary'))
                                        {{ $errors->first('initial_salary') }}
                                    @endif
                                </p>
                            </fieldset>
                            <fieldset class="fieldset">
                                <label class="label" for="final_salary">
                                    Faixa salarial final
                                </label>
                                <input
                                    id="final_salary"
                                    name="final_salary"
                                    class="input"
                                    type="number"
                                    placeholder="Digite o salário"
                                    value="{{ old('final_salary') }}"
                                />
                                <p class="error_message">
                                    @if($errors->has('final_salary'))
                                        {{ $errors->first('final_salary') }}
                                    @endif
                                </p>
                            </fieldset>
                        </div>
                        <fieldset class="fieldset">
                            <label class="label" for="benefits">
                                Benefícios
                            </label>
                            <textarea
                                class="input textarea"
                                name="benefits"
                                id="benefits"
                                name="benefits"
                                placeholder="Digite os benefícios"
                            >{{ old('benefits') }}</textarea>
                            <p class="error_message">
                                @if($errors->has('benefits'))
                                    {{ $errors->first('benefits') }}
                                @endif
                            </p>
                        </fieldset>
                        <fieldset class="fieldset">
                            <label class="label" for="how_to_apply">
                                Como se candidatar
                            </label>
                            <textarea
                                class="input textarea"
                                name="how_to_apply"
                                id="how_to_apply"
                                name="how_to_apply"
                                placeholder="Digite como se candidatar"
                            >{{ old('how_to_apply') }}</textarea>
                            <p class="error_message">
                                @if($errors->has('how_to_apply'))
                                    {{ $errors->first('how_to_apply') }}
                                @endif
                            </p>
                        </fieldset>
                        <div class="fieldset-container">
                            <fieldset class="fieldset">
                                <label class="label" for="zipcode">
                                    CEP
                                </label>
                                <input
                                    id="zipcode"
                                    name="zipcode"
                                    class="input"
                                    type="number"
                                    placeholder="Digite o CEP"
                                    value="{{ old('zipcode') }}"
                                />
                                <p class="error_message" id="zipcode_error_message">
                                    @if($errors->has('zipcode'))
                                        {{ $errors->first('zipcode') }}
                                    @endif
                                </p>
                            </fieldset>
                            <fieldset class="fieldset">
                                <label class="label" for="city_state">
                                    Cidade, Estado
                                </label>
                                <input
                                    id="city_state"
                                    name="city_state"
                                    class="input"
                                    type="text"
                                    disabled
                                    @if(old('city_state'))
                                        value="{{ old('city_state') }}"
                                    @else
                                        value="{{ old('city').', '.old('state') }}"
                                    @endif
                                />
                            </fieldset>
                        </div>
                        <input type="hidden" name="city" id="city" value={{ old('city') }} />
                        <input type="hidden" name="state" id="state" value={{ old('state') }} />

                        {!! htmlFormSnippet() !!}

                        <button class="button primary" id="form_button">
                            Enviar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
