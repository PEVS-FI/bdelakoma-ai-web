<?php

namespace App\Livewire;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ContactComponent extends Component
{
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
