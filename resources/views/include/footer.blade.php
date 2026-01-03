<div class="wpo-footer-area3">
    <div class="container">
        <div class="wpo-footer-top">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-4 col-12">
                    <div class="footer-logo">
                    </div>
                </div>
                <div class="col-lg-8 col-md-6 col-sm-8 col-12">
                    <div class="wpo-footer-menu">
                        <ul>
                            <li><a href="{{ localized_route('home') }}">@lang('global.menu.home')</a></li>
                            @foreach(Cache::get('pages.all', static fn () => App\Models\Page::query()->where('is_active', '=', 1)->orderBy('title_' . locale())->get()) as $page)
                                <li><a href="{{ localized_route('page', ['slug' => $page->{'slug_' . locale()}]) }}">{{ $page->{'title_' . locale()} }}</a></li>
                            @endforeach{{--                            <li><a href="#">@lang('global.menu.projects')</a></li>--}}
                            <li><a href="{{ localized_route('team') }}">@lang('global.menu.team')</a></li>
                            <li><a href="{{ localized_route('contact') }}">@lang('global.menu.contact')</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="wpo-footer-bottom">
        <span>© {{ date('Y') }} {{ __('global.footer.rights') }}</span>
    </div>
</div>