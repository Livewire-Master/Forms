<?php

namespace App\Livewire\Forms;

use App\Models\Newsletter;
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

    /**
     * Is Succeeded to handle process
     *
     * @var bool
     */
    public bool $is_succeeded = false;

    /**
     * Process message
     *
     * @var ?string
     */
    public ?string $message;

    /**
     * Join to the newsletter
     *
     * @return void
     */
    public function join(): void
    {
        $this->validate();

        $joined = Newsletter::create(
            [
                'email'     => $this->email,
                'full_name' => $this->full_name,
            ]
        );

        if ($joined)
        {
            $this->is_succeeded = true;
            $this->message = "You're joined to our newsletter service.";
        }
    }
}
