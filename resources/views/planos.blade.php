@extends('site.layouts.app')

@section('content')
    <div class="text-center">
        <h1 class="title-plan">Escolha o plano - <strong style="text-transform: uppercase">Gym Painel</strong></h1>
        <h3>O que atende sua necessidade ?</h3>
        <p>Assinando aqui nessa página você vai ter acesso ao nosso <strong style="text-transform: uppercase">gym painel</strong> que é que o painel para Academias</p>
    </div>
    <div class="row">
        <div class="col-md-4 col-sm-6">
            <div class="pricingTable">
                <div class="pricing-content">
                    <div class="pricingTable-header">
                        <h3 class="title">PLano basico</h3>
                    </div>
                    <div class="inner-content">
                        <div class="price-value">
                            <span class="currency">R$</span>
                            {{-- <span class="amount">{{ number_format($plan->price, 2, ',', '.') }}</span> --}}
                            <span class="amount">99,90</span>
                            <span class="duration">Por Mês</span>
                        </div>
                        <ul>

                            <li>cadastro de usúarios</li>

                        </ul>
                        {{-- <ul>
                            @foreach ($plan->details as $detail)
                                <li>{{ $detail->name }}</li>
                            @endforeach
                        </ul> --}}
                    </div>
                </div>
                <div class="pricingTable-signup">
                    <a href="#">Assinar</a>
                </div>
            </div>
        </div><!--end-->
        <div class="col-md-4 col-sm-6">
            <div class="pricingTable">
                <div class="pricing-content">
                    <div class="pricingTable-header">
                        <h3 class="title">PLano basico</h3>
                    </div>
                    <div class="inner-content">
                        <div class="price-value">
                            <span class="currency">R$</span>
                            {{-- <span class="amount">{{ number_format($plan->price, 2, ',', '.') }}</span> --}}
                            <span class="amount">199,90</span>
                            <span class="duration">Por Mês</span>
                        </div>
                        <ul>

                            <li>cadastro de usúarios</li>
                            <li>cadastro de treinos</li>
                            <li>Controle de Estoque</li>

                        </ul>
                        {{-- <ul>
                            @foreach ($plan->details as $detail)
                                <li>{{ $detail->name }}</li>
                            @endforeach
                        </ul> --}}
                    </div>
                </div>
                <div class="pricingTable-signup">
                    <a href="#">Assinar</a>
                </div>
            </div>
        </div><!--end-->
    </div>
@endsection
