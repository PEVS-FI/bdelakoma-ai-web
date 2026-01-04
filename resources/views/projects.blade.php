@extends('layouts.web')

@section('content')

    <!-- start page-title -->
    <section class="page-title bg-animate-shape">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2>{{ __('global.menu.our_projects') }}</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{ localized_route('home') }}">@lang('global.menu.home')</a></li>
                        <li>{{ __('global.projects.form.plural') }}</li>
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
                    <div class="wpo-faq-section">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="panel-group faq-accordion theme-accordion-s1" id="accordion">
                                    @foreach($globalProjects as $project)
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse-{{ $loop->index }}"
                                                        {{ $loop->index === 0 ? 'aria-expanded=true' : 'class=collapsed' }}>{{ $project->{'title_'. locale()}  }}</a>
                                            </div>
                                            <div id="collapse-{{ $loop->index }}"
                                                 class="panel-collapse collapse {{ $loop->index === 0 ? 'in' : '' }}">
                                                <div class="panel-body">
                                                    {!! $project->{'abstract_' . locale()} !!}
                                                    <a style="color: #fe3e57;" href="{{ localized_route('project', [ 'slug' => $project->{'slug_' . locale()}]) }}" class="read-more">{{ __('global.read_more') }} ...</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div> <!-- end wpo-faq-section -->
                </div>
            </div>
        </div>
    </div>

    <!-- .wpo-project-details-area end -->
@endsection