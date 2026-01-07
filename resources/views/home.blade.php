@extends('layouts.web')

@section('content')
    <!-- start of hero -->
    <section class="wpo-hero-style-3">
        <div class="wpo-slide-wrap">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-7 col-md-6 slide-caption">
                        <h2 class="wow fadeInLeftSlow" data-wow-delay="0.1s">{{ __('global.home.header') }}</h2>
                        <span class="wow fadeInUp" data-wow-delay="0.8s">{{ __('global.home.subheader') }}</span>
                        <div class="wow fadeInUp" data-wow-delay="1.0s">
                            @php
                                $route = \App\Models\Page::query()->where('pages.menu_id', '=', 1)->first();
                            @endphp
                            @if($route)
                                <a href="{{ localized_route('page', ['slug' => $route->{'slug_' . locale()}]) }}" class="theme-btn">{{ __('global.home.more') }}</a>
                            @endif
                            <a href="{{ localized_route('team') }}" class="theme-btn-s2">{{ __('global.team.header') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of hero slider -->




    <!-- wpo-client-area start -->
    <div class="wpo-client-area2">
        <div class="container">
            <div class="wpo-client-item">
                <div style="margin-bottom: 2rem;">
                    <h2>{{ __('global.home.partners') }}</h2>
                    <p>{{ __('global.home.partners_description') }}</p>
                </div>
                <div class="Gift-carousel owl-carousel">
                    <a href="https://paneurouni.com" target="_blank"><img src="{{ asset('images/partners/pevs.png') }}" lazy alt="Paneurópska vysoká škola"></a>
                    <a href="https://www.nadaciatatrabanky.sk" target="_blank"><img src="{{ asset('images/partners/ttb.jpg') }}" lazy alt="Nadácia Tatra Banky"></a>
                    <a href="https://www.nadaciavub.sk" target="_blank"><img style="width: 95% !important; margin-top: 25%" src="{{ asset('images/partners/nadacia_vub.png') }}" lazy alt="Nádácia VÚB"></a>
                    <a href="https://www.vub.sk" target="_blank"><img src="{{ asset('images/partners/vub.png') }}" lazy alt="VÚB Banka"></a>
                    <a href="https://sk-nic.sk/pt/fond-sk-nic/" target="_blank"><img style="width: 85% !important; margin-top: 5%" src="{{ asset('images/partners/sknic.png') }}" lazy alt="Fond SK-NIC"></a>
                    <a href="https://sk-nic.sk/" target="_blank"><img style="width: 85% !important; margin-top: 20%" src="{{ asset('images/partners/sknic-logo.png') }}" lazy alt="SK-NIC"></a>
                </div>
            </div>
        </div>
    </div>
    <!-- wpo-client-area end -->
@endsection