@extends('layouts.web')

@section('content')
    <div class="wpo-project-details-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="wpo-service-sidebar">
                        <div class="widget all-wpo-services">
                            <h3>{{ __('global.content') }}</h3>
                            <ul>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="wpo-minimals-wrap">
                        <div class="minimals-img">
                            <img src="{{ Storage::url($page->photo) }}" alt="Page image">
                        </div>
                    </div>
                    <div class="wpo-p-details-section">
                        {!! $page->{'text_' . locale()} !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection