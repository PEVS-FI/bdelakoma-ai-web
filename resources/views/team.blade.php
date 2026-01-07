@extends('layouts.web')

@section('content')
    <!-- start page-title -->
    <section class="page-title bg-animate-shape">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2>{{ __('global.team.header') }}</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{ localized_route('home') }}">@lang('global.menu.home')</a></li>
                        <li>@lang('global.menu.team')</li>
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

    <div class="wpo-about-area-3 section-padding">
        <div class="wpo-about-wrap">
            <div class="container">
                @foreach(Cache::get('team_members.all', static fn () => App\Models\TeamMember::query()->orderBy('surname')->orderBy('first_name')->get()) as $member)
                    <div class="row mb-2">
                        <div class="col-lg-6 col-md-6">
                            <div class="about-s2-img">
                                @if($member->photo)
                                    <img src="{{ Storage::url($member->photo) }}" alt="{{ $member->full_name }}">
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="wpo-about-text" style="padding-top: 30px !important">
                                <h2>{{ $member->full_name }}</h2>
                                <p>{!! $member->{'annotation_' . locale()} !!}</p>
                                @if(!empty($member->{'skills_' . locale()}))
                                    <p><b>{{ __('global.team_members.web.skills') }}</b></p>
                                    <ul>
                                    @foreach($member->{'skills_' . locale()} as $skill)
                                        <li>{{ $skill['name'] }}</li>
                                    @endforeach
                                    </ul>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection