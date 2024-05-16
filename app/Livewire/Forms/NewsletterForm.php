<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class NewsletterForm extends Form
{
    /**
     * Full Name
     *
     * @var ?string
     */
    #[Validate(['required', 'string', 'min:3'])]
    public ?string $full_name;

    /**
     * Full Name
     *
     * @var ?string
     */
    #[Validate(['required', 'email', 'unique:newsletters,email'])]
    public ?string $email;
}
