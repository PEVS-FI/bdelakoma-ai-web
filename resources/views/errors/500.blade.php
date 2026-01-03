@extends('layouts.web')

@section('content')
    <!-- start page-title -->
    <section class="page-title bg-animate-shape">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2>{{ __('error.500.title') }}</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{ localized_route('home') }}">@lang('global.menu.home')</a></li>
                        <li>{{ __('error.500.description') }}</li>
                    </ol>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
        <div class="shape">
            <img src="{{ asset('assets/images/shape/shape-7.png') }}" alt="">
        </div>
        <div class="shape7">
            <img src="{{ asset('assets/images/shape/shape-8.png') }}" alt="">
        </div>
        <div class="shape8">
            <img src="{{ asset('assets/images/shape/shape-3.png') }}" alt="">
        </div>
        <div class="shape10">
            <img src="{{ asset('assets/images/shape/shape-5.png') }}" alt="">
        </div>
        <div class="shape11">
            <img src="{{ asset('assets/images/shape/shape-6.png') }}" alt="">
        </div>
        <div class="shape12">
            <img src="{{ asset('assets/images/shape/shape-4.png') }}" alt="">
        </div>
    </section>
    <!-- end page-title -->
    <!-- start error-500-section -->
    <section class="error-404-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="content clearfix">
                        <div class="error-message">
                            <h3>{{ __('error.500.text') }}</h3>
                            <p>{{ __('error.500.subtext') }}</p>
                            <a href="{{ localized_route('home') }}" class="theme-btn-s2">@lang('global.menu.home')</a>
                        </div>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end error-500-section -->
@endsection