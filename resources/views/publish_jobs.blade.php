@extends('layouts.simple')

@section('head')
    {!! htmlScriptTagJsApi() !!}
@endsection

@section('content')
    <div class="wrapper">
        <div class="container">
            <h1 class="title">Anuncie uma vaga</h1>
            <h2 class="subtitle">preencha as informações da vaga e aguarde pela análise</h2>

            @if ($errors->has('page_error'))
              <div class="alert error">
                <p>{{ $errors->first('page_error') }}</p>
              </div>
            @endif
            @if (Session::has('page_success'))
              <div class="alert success">
                <p>{{ Session::get('page_success') }}</p>
              </div>
            @endif
            <form method="POST" action="{{ route('user.publish_jobs_post') }}">
                @csrf
                <div class="publish-jobs">
                    <div class="card">
                        <h2 class="title">Informações básicas</h2>
                        <div class="four-fields">
                            <fieldset class="fieldset">
                                <label class="label" for="job_name">
                                    Cargo
                                </label>
                                <input id="job_name" name="job_name" class="input" type="text"
                                    placeholder="Digite o cargo da vaga" value="{{ old('job_name') }}" />
                                <p class="error_message">
                                    @if ($errors->has('job_name'))
                                        {{ $errors->first('job_name') }}
                                    @endif
                                </p>
                            </fieldset>
                            <fieldset class="fieldset">
                                <label class="label" for="category">
                                    Categoria
                                </label>
                                <select class="input" name="category_id" id="category" name="category">
                                    <option value="" {{ old('category_id') === '' ? 'selected' : '' }}>Escolha uma
                                        categoria</option>
                                    @foreach ($categories as $category)
                                        <option value={{ $category['id'] }}
                                            {{ old('category_id') == $category['id'] ? 'selected' : '' }}>
                                            {{ $category['text'] }}
                                        </option>
                                    @endforeach
                                </select>
                                <p class="error_message">
                                    @if ($errors->has('category_id'))
                                        {{ $errors->first('category_id') }}
                                    @endif
                                </p>
                            </fieldset>
                            <fieldset class="fieldset">
                                <label class="label" for="company_name">
                                    Nome da empresa
                                </label>
                                <input id="company_name" name="company_name" class="input" type="text"
                                    placeholder="Digite o nome da empresa" value="{{ old('company_name') }}" />
                                <p class="error_message">
                                    @if ($errors->has('company_name'))
                                        {{ $errors->first('company_name') }}
                                    @endif
                                </p>
                            </fieldset>
                            <fieldset class="fieldset">
                                <label class="label" for="contract_type">
                                    Regime de contratação
                                </label>
                                <select class="input" name="contract_type" id="contract_type">
                                    <option value="" {{ old('contract_type') === '' ? 'selected' : '' }}>
                                        Escolha uma das opções
                                    </option>
                                    @foreach ($contractTypes as $contractType)
                                        <option value={{ $contractType['name'] }}
                                            {{ old('contract_type') === $contractType['name'] ? 'selected' : '' }}>
                                            {{ $contractType['text'] }}
                                        </option>
                                    @endforeach
                                </select>
                                <p class="error_message">
                                    @if ($errors->has('contract_type'))
                                        {{ $errors->first('contract_type') }}
                                    @endif
                                </p>
                            </fieldset>
                            <fieldset class="fieldset">
                                <label class="label" for="allocation">
                                    Alocação
                                </label>
                                <select class="input" name="allocation" id="allocation">
                                    <option value="" {{ old('allocation') === '' ? 'selected' : '' }}>
                                        Escolha uma das opções
                                    </option>
                                    @foreach ($allocations as $allocation)
                                        <option value={{ $allocation['name'] }}
                                            {{ old('allocation') === $allocation['name'] ? 'selected' : '' }}>
                                            {{ $allocation['text'] }}
                                        </option>
                                    @endforeach
                                </select>
                                <p class="error_message">
                                    @if ($errors->has('allocation'))
                                        {{ $errors->first('allocation') }}
                                    @endif
                                </p>
                            </fieldset>
                            <fieldset class="fieldset">
                                <label class="label" for="zipcode">
                                    CEP
                                </label>
                                <input id="zipcode" name="zipcode" class="input" type="number"
                                    placeholder="Digite o CEP" value="{{ old('zipcode') }}" />
                                <p class="error_message" id="zipcode_error_message">
                                    @if ($errors->has('zipcode'))
                                        {{ $errors->first('zipcode') }}
                                    @endif
                                </p>
                            </fieldset>
                            <fieldset class="fieldset">
                                <label class="label" for="city_state">
                                    Cidade, Estado
                                </label>
                                <input id="city_state" name="city_state" class="input" type="text" disabled
                                    @if (old('city_state')) value="{{ old('city_state') }}"
                                  @else
                                      value="{{ old('city') . ', ' . old('state') }}" @endif />
                            </fieldset>
                            <input type="hidden" name="city" id="city" value={{ old('city') }} />
                            <input type="hidden" name="state" id="state" value={{ old('state') }} />
                        </div>
                    </div>
                    <div class="card">
                        <h2 class="title">Informações de descrição</h2>
                        <div class="two-fields">
                            <fieldset class="fieldset">
                                <label class="label" for="description">
                                    Descrição
                                </label>
                                <textarea class="input textarea" name="description" id="description" placeholder="Digite a descrição da vaga">{{ old('description') }}</textarea>
                                <p class="error_message">
                                    @if ($errors->has('description'))
                                        {{ $errors->first('description') }}
                                    @endif
                                </p>
                            </fieldset>
                            <fieldset class="fieldset">
                                <label class="label" for="responsabilities">
                                    Responsabilidades
                                </label>
                                <textarea class="input textarea" name="responsabilities" id="responsabilities"
                                    placeholder="Digite as responsabilidades">{{ old('responsabilities') }}</textarea>
                                <p class="error_message">
                                    @if ($errors->has('responsabilities'))
                                        {{ $errors->first('responsabilities') }}
                                    @endif
                                </p>
                            </fieldset>
                            <fieldset class="fieldset">
                                <label class="label" for="requirements">
                                    Requisitos
                                </label>
                                <textarea class="input textarea" name="requirements" id="requirements" placeholder="Digite os requisitos">{{ old('requirements') }}</textarea>
                                <p class="error_message">
                                    @if ($errors->has('requirements'))
                                        {{ $errors->first('requirements') }}
                                    @endif
                                </p>
                            </fieldset>
                            <fieldset class="fieldset">
                                <label class="label" for="differential">
                                    Diferencial
                                </label>
                                <textarea class="input textarea" name="differential" id="differential"
                                    placeholder="Digite o que será um diferencial">{{ old('differential') }}</textarea>
                                <p class="error_message">
                                    @if ($errors->has('differential'))
                                        {{ $errors->first('differential') }}
                                    @endif
                                </p>
                            </fieldset>
                        </div>
                    </div>
                    <div class="card">
                        <h2 class="title">Informações de remuneração</h2>
                        <div class="three-fields">
                            <fieldset class="fieldset">
                                <label class="label" for="salary">
                                    Salário
                                </label>
                                <input id="salary" name="salary" class="input" type="number"
                                    placeholder="Digite o salário" value="{{ old('salary') }}" />
                                <p class="error_message">
                                    @if ($errors->has('salary'))
                                        {{ $errors->first('salary') }}
                                    @endif
                                </p>
                            </fieldset>
                            <fieldset class="fieldset">
                                <label class="label" for="initial_salary">
                                    Faixa salarial inicial(caso o valor possa variar)
                                </label>
                                <input id="initial_salary" name="initial_salary" class="input" type="number"
                                    placeholder="Digite o salário" value="{{ old('initial_salary') }}" />
                                <p class="error_message">
                                    @if ($errors->has('initial_salary'))
                                        {{ $errors->first('initial_salary') }}
                                    @endif
                                </p>
                            </fieldset>
                            <fieldset class="fieldset">
                                <label class="label" for="final_salary">
                                    Faixa salarial final
                                </label>
                                <input id="final_salary" name="final_salary" class="input" type="number"
                                    placeholder="Digite o salário" value="{{ old('final_salary') }}" />
                                <p class="error_message">
                                    @if ($errors->has('final_salary'))
                                        {{ $errors->first('final_salary') }}
                                    @endif
                                </p>
                            </fieldset>
                            <fieldset class="fieldset">
                                <label class="label" for="benefits">
                                    Benefícios
                                </label>
                                <textarea class="input textarea" name="benefits" id="benefits" name="benefits" placeholder="Digite os benefícios">{{ old('benefits') }}</textarea>
                                <p class="error_message">
                                    @if ($errors->has('benefits'))
                                        {{ $errors->first('benefits') }}
                                    @endif
                                </p>
                            </fieldset>
                        </div>
                    </div>
                    <div class="card">
                        <h2 class="title">Como se candidatar</h2>
                        <p class="subtitle">escolha apenas uma das opções abaixo</p>
                        <div class="three-fields">
                            <fieldset class="fieldset">
                                <label class="label" for="how_to_apply_telephone">
                                  Telefone
                                </label>
                                <input
                                  id="how_to_apply_telephone"
                                  name="how_to_apply_telephone"
                                  class="input"
                                  type="text"
                                  placeholder="Digite o telefone"
                                  value="{{ old('how_to_apply_telephone') }}"
                                />
                                <p class="error_message">
                                  @if ($errors->has('how_to_apply_telephone'))
                                    {{ $errors->first('how_to_apply_telephone') }}
                                  @endif
                                </p>
                            </fieldset>
                            <fieldset class="fieldset">
                              <label class="label" for="how_to_apply_email">
                                E-mail
                              </label>
                              <input
                                id="how_to_apply_email"
                                name="how_to_apply_email"
                                class="input"
                                type="text"
                                placeholder="Digite o e-mail"
                                value="{{ old('how_to_apply_email') }}"
                              />
                              <p class="error_message">
                                @if ($errors->has('how_to_apply_email'))
                                  {{ $errors->first('how_to_apply_email') }}
                                @endif
                              </p>
                          </fieldset>
                          <fieldset class="fieldset">
                            <label class="label" for="how_to_apply_site">
                              Site
                            </label>
                            <input
                              id="how_to_apply_site"
                              name="how_to_apply_site"
                              class="input"
                              type="text"
                              placeholder="Digite o site"
                              value="{{ old('how_to_apply_site') }}"
                            />
                            <p class="error_message">
                              @if ($errors->has('how_to_apply_site'))
                                {{ $errors->first('how_to_apply_site') }}
                              @endif
                            </p>
                        </fieldset>
                        </div>
                    </div>
                    {!! htmlFormSnippet() !!}
                    <div>
                        <button class="button" id="form_button">
                            Anunciar vaga
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
