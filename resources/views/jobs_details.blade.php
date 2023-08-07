@extends('layouts.simple')

@section('content')
    <div class="wrapper">
        <div class="container">
            <h1 class="title">
                {{ $job->job_name }}
            </h1>
            <h2 class="subtitle">
                {{ $job->company_name }} | {{ $job->city->name }}, {{ $job->state->name }} |
                @if ($job->contract_type == 'clt_full')
                    CLT de tempo integral |
                @elseif($job->contract_type == 'clt_part')
                    CLT de tempo parcial |
                @elseif($job->contract_type == 'temporary')
                    Temporário |
                @elseif($job->contract_type == 'internship')
                    Estágio |
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
                @if ($job['working_time'])
                    {{ $job['working_time'] }}
                @endif
            </h2>
            <div class="job-details">
                <div class="card">
                    <div class="content">
                        <p>{!! $job->description !!}</p>
                        @if ($job->responsabilities)
                            <div class="section">
                                <p class="title">Responsabilidades</p>
                                <p>{!! $job->responsabilities !!}</p>
                            </div>
                        @endif
                        <div class="section-two-columns">
                            <div class="section">
                                <p class="title">Requisitos</p>
                                <p>{!! $job->requirements !!}</p>
                            </div>
                            @if ($job->differential)
                              <div class="section">
                                <p class="title">Diferenciais</p>
                                <p>{!! $job->differential !!}</p>
                              </div>
                            @endif
                        </div>
                        <div class="section-two-columns">
                            <div class="section">
                                <p class="title">Salário</p>
                                <p>
                                    @if ($job->salary)
                                        R$ {{ number_format($job->salary, 2) }}
                                    @elseif($job->initial_salary)
                                        R$ {{ number_format($job->initial_salary, 2) }} até R$
                                        {{ number_format($job->final_salary, 2) }}
                                    @else
                                        Salário a combinar
                                    @endif
                                </p>
                            </div>
                            @if ($job->benefits)
                              <div class="section">
                                  <p class="title">Benefícios</p>
                                  <p>{!! $job->benefits !!}</p>
                              </div>
                            @endif
                        </div>
                        <div class="section">
                          <p class="title">Como se candidatar</p>
                          @if (empty($job->how_to_apply_telephone) && empty($job->how_to_apply_email) && empty($job->how_to_apply_site) && $job->how_to_apply)
                            <p>{{ $job->how_to_apply }}</p>
                          @endif
                          @if ($job->how_to_apply_telephone)
                            <p>{{ $job->how_to_apply_telephone }}</p>
                          @endif
                          @if ($job->how_to_apply_email)
                            <p>{{ $job->how_to_apply_email }}</p>
                          @endif
                          @if ($job->how_to_apply_site)
                            <p>{{ $job->how_to_apply_site }}</p>
                          @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
