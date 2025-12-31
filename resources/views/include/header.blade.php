<!-- Start header -->
@php
    use App\Models\Project;
    $projects = Cache::get('projects.all', static fn() => Project::query()->get());

    $css = '';
    $routeName = substr(Route::currentRouteName(), 3);
    switch ($routeName)
    {
        case 'projects':
        case 'research':
        case 'team':
        case 'contact':
            $css = 'header-style-3';
            break;
        case 'home':
            $css = 'header-style-2';
            break;
    }

@endphp
<header id="header" class="site-header {{ $css }}">

    <nav class="navigation navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="open-btn">
                    <span class="sr-only">{{ __('global.toggle_navigation') }}</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div id="navbar" class="navbar-collapse collapse navbar-right navigation-holder">
                <button class="close-navbar"><i class="ti-close"></i></button>


                <ul class="nav navbar-nav">
                    <li><a href="{{ localized_route('home') }}">{{ __('global.menu.home') }}</a></li>

                    <li><a href="{{ localized_route('research') }}">{{ __('global.menu.research') }}</a></li>
{{--                    <li class="menu-item-has-children">--}}
{{--                        <a href="javascript:void(0);">{{ __('global.menu.projects') }}</a>--}}
{{--                        <ul class="sub-menu">--}}
{{--                            @foreach($projects as $project)--}}
{{--                                <li><a href="#">{{ $project->name }}</a></li>--}}
{{--                            @endforeach--}}
{{--                        </ul>--}}
{{--                    </li>--}}
                    <li><a href="{{ localized_route('team') }}">{{ __('global.menu.team') }}</a></li>
                    <li><a href="{{ localized_route('contact') }}">{{ __('global.menu.contact') }}</a></li>
                    <li class="menu-item-has-children">
                        <a href="javascript:void(0);"><img style="width: 24px;" src="{{ asset('images/flags/' . locale() . '.png') }}"
                                                           alt="@lang('global.languages.' . locale())"/></a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('language.locale', ['locale' => 'sk']) }}"><img style="width: 24px; margin-right: 10px;"
                                                                                                  src="{{ asset('images/flags/sk.png') }}"
                                                                                                  alt="@lang('global.languages.sk')"/>@lang('global.languages.sk')
                                </a></li>
                            <li><a href="{{ route('language.locale', ['locale' => 'en']) }}"><img style="width: 24px; margin-right: 10px;"
                                                                                                  src="{{ asset('images/flags/en.png') }}"
                                                                                                  alt="@lang('global.languages.en')"/>@lang('global.languages.en')
                                </a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- end of nav-collapse -->
        </div><!-- end of container -->
    </nav>
</header>
<!-- end of header -->