@extends('layouts.web')

@section('content')
    <!-- start page-title -->
    <section class="page-title bg-animate-shape">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2>{{ __('global.contact.header') }}</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{ localized_route('home') }}">@lang('global.menu.home')</a></li>
                        <li>@lang('global.menu.contact')</li>
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

    <!-- start wpo-wpo-contact-form-map -->
    <section class="wpo-contact-area3 section-padding">
        <div class="wpo-wpo-contact-form-map">
            <div class="container">

                <div class="row">
                    <div class="co-lg-10 col-lg-offset-1  col-12">
                        <div class="row">
                            <div class="col col-lg-6 col-md-6 col-12">
                                <livewire:contact-component />
                            </div>
                            <div class="col col-lg-6 col-md-6 col-12">
                                <div class="wpo-contact-info">
                                    <div class="info-item">
                                        <h2>{{ __('global.contact.faculty') }}</h2>
                                        <p>{!!  __('global.contact.address')  !!}
                                        </p>

                                        <div class="info-wrap">
                                            <div class="info-icon">
                                                <i class="fi flaticon-worldwide"></i>
                                            </div>
                                            <div class="info-text">
                                                <span>{{ __('global.contact.header_address') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-12">
                                <div class="contact-map">
                                    <iframe
                                            allowfullscreen
                                            loading="lazy"
                                            referrerpolicy="no-referrer-when-downgrade"
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2663.929853907406!2d17.1120561!3d48.1073597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476c89ba9d9c9d9f%3A0x6470ef7e6a756fdf!2sPaneur%C3%B3pska%20vysok%C3%A1%20%C5%A1kola!5e0!3m2!1sen!2ssk!4v1703958000000!5m2!1sen!2ssk">
                                    </iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </div>
    </section>
    <!-- end wpo-wpo-contact-form-map -->
@endsection