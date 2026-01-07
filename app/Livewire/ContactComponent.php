<?php

namespace App\Livewire;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ContactComponent extends Component
{
    public $turnstileToken;

    #[Validate]
    public ?string $name = '';

    #[Validate]
    public ?string $surname = '';

    #[Validate]
    public ?string $email = '';

    #[Validate]
    public ?string $subject = '';

    #[Validate]
    public ?string $message = '';

    public bool $isLoading = false;

    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'surname' => ['required', 'string'],
            'email' => ['required', 'email'],
            'subject' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string', 'max:2000'],
            'turnstileToken' => ['required'],
        ];
    }

    public function validationAttributes(): array
    {
        return [
            'name' => __('global.contact.form.first_name'),
            'surname' => __('global.contact.form.surname'),
            'email' => __('global.contact.form.email'),
            'subject' => __('global.contact.form.subject'),
            'message' => __('global.contact.form.message'),
        ];
    }

    public function send(): void
    {
        $this->isLoading = true;
        $this->validate();

        $response = Http::asForm()->post('https://challenges.cloudflare.com/turnstile/v0/siteverify', [
            'secret' => config('cloudflare.turnstile.secret_key'),
            'response' => $this->turnstileToken,
            'remoteip' => request()->ip(),
        ]);

        if (! $response->json()['success']) {
            $this->addError('turnstileToken', __('global.cloudflare.turnstile.error'));
            return;
        }

        $subject = $this->subject;
        $messageText = 'Meno: ' . $this->name . ' ' . $this->surname . "\n" .
                   'E-mail: ' . $this->email . "\n\n" .
                   "Správa:\n" . $this->message;

        Mail::raw($messageText, static function ($message) use ($subject) {
            $message->to('jan.lacko@paneurouni.com')
                ->bcc('michal.drobny@paneurouni.com')
                ->subject($subject);
        });

        $this->reset();
        Session::put('success', __('global.contact.form.success'));
        $this->isLoading = false;
    }

    public function closeModal(): void
    {
        Session::forget('success');
    }

    public function render(): Factory|View|\Illuminate\View\View
    {
        return view('livewire.contact-component');
    }
}
