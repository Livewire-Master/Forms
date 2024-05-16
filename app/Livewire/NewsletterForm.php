<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;

class NewsletterForm extends Component
{
    /**
     * Full Name
     *
     * @var string
     * @note u can use this for real-time validations: #[Rule(['required', 'string', 'min:3'])]
     */
    #[Validate]
    public string $full_name = '';

    /**
     * Email
     *
     * @var string
     */
    #[Validate]
    public string $email = '';

    /**
     * Validation Rules
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'full_name' => [
                'required', 'string', 'min:3',
            ],

            'email' => [
                'required', 'email',
            ],
        ];
    }

    /**
     * Register a user by its email to our newsletter service.
     *
     * @return void
     */
    public function joinNewsletter(): void
    {
        $this->validate();

        dd($this->full_name, $this->email);
    }
}
