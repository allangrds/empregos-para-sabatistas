@extends('layouts.simple')

@section('content')
    <div class="job_details">
        <div class="wrapper">
            <div class="container">
                <div class="card">
                    <h1 class="title">
                        {{ $job['job_name'] }}
                    </h1>
                    <h2 class="subtitle">
                        {{ $job->company_name }}, {{ $job->city->name }}, {{ $job->state->name }}
                    </h2>
                    <div class="one_group_grid">
                        <span class="item_title">Descrição da vaga</span>
                        <p class="item_description">{{ $job['description'] }}</p>
                    </div>
                    <div class="three_group_grid">
                        <div>
                            <span class="item_title">Requisitos</span>
                            <p class="item_description">{{ $job['requirements'] }}</p>
                        </div>
                        <div>
                            <span class="item_title">Responsabilidades</span>
                            <p class="item_description">{{ $job['responsabilities'] }}</p>
                        </div>
                        <div>
                            <span class="item_title">Desejáveis</span>
                            <p class="item_description">{{ $job['differential'] }}</p>
                        </div>
                        <div>
                            <span class="item_title">Benefícios</span>
                            <p class="item_description">{{ $job['benefits'] }}</p>
                        </div>
                        <div>
                            <span class="item_title">Salário</span>
                            <p class="item_description">@if($job->salary)
                                R$ {{ number_format($job->salary, 2) }}
                                @elseif($job->initial_salary)
                                    R$ {{ number_format($job->initial_salary, 2) }} até R$ {{ number_format($job->final_salary, 2) }}
                                @else
                                    Salário a combinar
                                @endif
                            </p>
                        </div>
                        <div>
                            <span class="item_title">Horário de trabalho</span>
                            <p class="item_description">{{ $job['working_time'] }}</p>
                        </div>
                        <div>
                            <span class="item_title">Contratação</span>
                            <p class="item_description">@if($job->contract_type == 'clt_full')
                                    CLT de tempo integral
                                @elseif($job->contract_type == 'clt_part')
                                    CLT de tempo parcial
                                @else
                                    PJ
                                @endif
                            </p>
                        </div>
                        <div>
                            <span class="item_title">Alocação</span>
                            <p class="item_description">@if($job->allocation == 'presential')
                                    Presencial
                                @elseif($job->allocation == 'hybrid')
                                    Híbrido
                                @else
                                    Remoto(100% em casa)
                                @endif
                            </p>
                        </div>
                        <div>
                            <span class="item_title">Como se candidatar</span>
                            <p class="item_description">{{ $job['how_to_apply'] }}</p>
                        </div>
                    </div>
                    <div class="one_group_grid">
                        <div>
                            <span class="item_title">Data de criação da vaga</span>
                            <p class="item_description">{{ $job['created_at']->format('d/m/Y') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
