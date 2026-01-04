<div class="wpo-contact-form">
    <h2>{{ __('global.contact.header') }}</h2>
    <form wire:submit="send" class="contact-validation-active">
        <div>
            <input type="text" class="form-control" wire:model.live.debounce="name" id="name"
                   placeholder="{{ __('global.contact.form.first_name') }}">
            @error('name')
            <p class="error">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <input type="text" class="form-control" wire:model.live.debounce="surname" id="surname"
                   placeholder="{{ __('global.contact.form.surname') }}">
            @error('surname')
            <p class="error">{{ $message }}</p>
            @enderror
        </div>
        <div class="clearfix">
            <input type="email" class="form-control" wire:model.live.debounce="email" id="email"
                   placeholder="{{ __('global.contact.form.email') }}">
            @error('email')
            <p class="error">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <input type="text" class="form-control" wire:model.live.debounce="subject" id="subject"
                   placeholder="{{ __('global.contact.form.subject') }}">
            @error('subject')
            <p class="error">{{ $message }}</p>
            @enderror
        </div>
        <div x-data="{ count: 0, max: 2000 }" x-init="count = $refs.message.value.length">
            <textarea class="form-control" wire:model.live.debounce="message" id="message" x-ref="message"
                      maxlength="2000"
                      x-on:input="count = $el.value.length"
                      placeholder="{{ __('global.contact.form.message') }}"></textarea>
            <div class="text-right text-xs text-gray-500 mt-1">
                <span x-text="count"></span> / <span x-text="max"></span>
            </div>
            @error('message')
            <p class="error">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <div wire:ignore>
                <div class="cf-turnstile"
                     data-sitekey="{{ config('cloudflare.turnstile.site_key') }}"
                     data-callback="handleTurnstileResponse">
                </div>
            </div>

            @error('turnstileToken')
            <p class="error">{{ $message }}</p>
            @enderror

            <script>
                function handleTurnstileResponse(token) {
                    // This injects the token into the PHP property $turnstileToken
                    @this.set('turnstileToken', token);
                }
            </script>

        </div>

        <div class="submit-area">
            <button type="submit" @if($isLoading) disabled @endif class="theme-btn submit-btn">{{ __('global.contact.form.send') }}</button>
            @if($isLoading)
                <div id="loader">
                    <i class="ti-reload"></i>
                </div>
            @endif
        </div>

        @if(Session::has('success'))
            <div class="modal-overlay">
                <div class="modal-box">
                    <div class="checkmark-circle">
                        <div class="checkmark"></div>
                    </div>
                    <h2>Úspech!</h2>
                    <p>{{ session('success') }}</p>

                    <label class="close-btn" wire:click="closeModal">Zavriet</label>
                </div>
            </div>
        @endif
    </form>
</div>