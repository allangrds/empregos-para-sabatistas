@extends('layouts.simple')

@section('content')
    <div class="wrapper">
        <div class="container">
            <div class="jobs">
                <section class="filters">
                    <p class="title">Filtros</p>
                    <form action="{{ route('user.jobs') }}" method="get">
                        @csrf
                        <div class="content">
                            <fieldset class="fieldset">
                                <label class="label" for="job_name">
                                    Nome da vaga
                                </label>
                                <input id="job_name" name="job_name" class="input" type="text"
                                    placeholder="Digite o nome da vaga" value="{{ request('job_name') }}" />
                            </fieldset>
                            <fieldset class="fieldset">
                                <label class="label" for="categories">
                                    Categorias
                                </label>
                                <select class="input" name="category_id" id="category" name="category">
                                    <option value="" {{ request('category_id') === '' ? 'selected' : '' }}>Todas
                                    </option>
                                    @foreach ($categories as $category)
                                        <option value={{ $category['id'] }}
                                            {{ request('category_id') == $category['id'] ? 'selected' : '' }}>
                                            {{ $category['text'] }}
                                        </option>
                                    @endforeach
                                </select>
                            </fieldset>
                            <fieldset class="fieldset">
                                <label class="label" for="state">
                                    Estado
                                </label>
                                <select class="input" name="state_id" id="state" name="state">
                                    <option value="" {{ request('state_id') === '' ? 'selected' : '' }}>Todos</option>
                                    @foreach ($states as $state)
                                        <option value={{ $state['id'] }}
                                            {{ request('state_id') == $state['id'] ? 'selected' : '' }}>
                                            {{ $state['name'] }}
                                        </option>
                                    @endforeach
                                </select>
                            </fieldset>
                            <fieldset class="fieldset">
                                <label class="label" for="city">
                                    Cidade
                                </label>
                                <input id="city" name="city" class="input" type="text"
                                    placeholder="Digite o nome da cidade" value="{{ request('city') }}" />
                            </fieldset>
                            <fieldset class="fieldset">
                                <label class="label" for="contract_type">
                                    Regime de contratação
                                </label>
                                <select class="input" name="contract_type" id="contract_type">
                                    <option value="" {{ request('contract_type') === '' ? 'selected' : '' }}>
                                        Todas
                                    </option>
                                    @foreach ($contractTypes as $contractType)
                                        <option value={{ $contractType['name'] }}
                                            {{ request('contract_type') === $contractType['name'] ? 'selected' : '' }}>
                                            {{ $contractType['text'] }}
                                        </option>
                                    @endforeach
                                </select>
                            </fieldset>
                            <fieldset class="fieldset">
                                <label class="label" for="allocation">
                                    Alocação
                                </label>
                                <select class="input" name="allocation" id="allocation">
                                    <option value="" {{ request('allocation') === '' ? 'selected' : '' }}>
                                        Todas
                                    </option>
                                    @foreach ($allocations as $allocation)
                                        <option value={{ $allocation['name'] }}
                                            {{ request('allocation') === $allocation['name'] ? 'selected' : '' }}>
                                            {{ $allocation['text'] }}
                                        </option>
                                    @endforeach
                                </select>
                            </fieldset>
                        </div>
                        <button class="button tiny">Pesquisar</button>
                    </form>
                </section>
                <section class="content">
                    @foreach ($jobs as $job)
                        <a href="{{ route('user.jobs_detail', $job->slug) }}" class="link">
                            <div class="card">
                                <h2 class="title">
                                    {{ $job->job_name }}
                                </h2>
                                <p class="subtitle">
                                    {{ $job->company_name }} | {{ $job->city->name }}, {{ $job->state->name }} |
                                    @if ($job->contract_type == 'clt_full')
                                        CLT de tempo integral |
                                    @elseif($job->contract_type == 'clt_part')
                                        CLT de tempo parcial |
                                    @else
                                        PJ |
                                    @endif
                                    @if ($job->allocation == 'presential')
                                        Presencial |
                                    @elseif($job->allocation == 'hybrid')
                                        Híbrido |
                                    @elseif($job->allocation == 'remote')
                                        Remoto |
                                    @endif
                                    @if ($job->salary)
                                        R$ {{ number_format($job->salary, 2) }} |
                                    @elseif($job->initial_salary)
                                        R$ {{ number_format($job->initial_salary, 2) }} até R$
                                        {{ number_format($job->final_salary, 2) }} |
                                    @else
                                        Salário a combinar |
                                    @endif
                                </p>
                            </div>
                        </a>
                    @endforeach
                    {{ $jobs->appends([
                            'job_name' => request('job_name'),
                            'category_id' => request('category_id'),
                            'state_id' => request('state_id'),
                            'city' => request('city'),
                            'contract_type' => request('contract_type'),
                        ])->links() }}
                </section>
            </div>
        </div>
    </div>
@endsection
