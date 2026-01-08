@extends('layouts.web')

@section('content')

    <!-- start page-title -->
    <section class="page-title bg-animate-shape">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2>{{ $project->{'title_' . locale()} }}</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{ localized_route('home') }}">@lang('global.menu.home')</a></li>
                        <li>{{ __('global.projects.project_details') }}</li>
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
    <!-- .wpo-project-details-area start -->

    <div class="wpo-project-details-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="wpo-minimal-wrap">
                        @if($project->photo)
                        <div class="wpo-minimal-img">
                            <img src="{{ Storage::url($project->photo) }}" alt="{{ $project->{'title_' . locale()} }}">
                        </div>
                        @endif
                    </div>
                    <div class="wpo-project-details-list">
                        <div class="row">
                            <div class="co-l-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="wpo-project-details-text">
                                    <span>Kód</span>
                                    <h2>{{ $project->code }}</h2>
                                </div>
                            </div>
                            <div class="co-l-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="wpo-project-details-text">
                                    <span>Trvanie</span>
                                    <h2>{{ $project->length_sk }}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wpo-p-details-section">
                        {!! $project->{'text_' . $locale} !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- .wpo-project-details-area end -->
@endsection