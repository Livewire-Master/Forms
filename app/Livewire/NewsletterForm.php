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
     */
    #[Validate(['required', 'numeric'])]
    public string $full_name = '';

    /**
     * Email
     *
     * @var string
     */
    public string $email = '';

    /**
     * Register a user by its email to our newsletter service.
     *
     * @return void
     */
    public function joinNewsletter(): void
    {
        $this->validate();

        // 100% safe
    }
}
