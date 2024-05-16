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
    public function subscribe(): void
    {
        sleep(3);
        $this->validate();

        $joined = Newsletter::create($this->all());

        if ($joined)
        {
            $this->is_succeeded = true;
            $this->message      = "You're joined to our newsletter service.";
            $this->reset(); # way no.1
            // $this->pull(); # way no.2 - use it after merges
        }
    }

    /**
     * Unsubscribe a user from newsletter
     *
     * @param int $id
     *
     * @return void
     */
    public function unsubscribe(int $id): void
    {
        $subscriber = Newsletter::find($id);

        if ($subscriber)
        {
            $subscriber->delete();
            $this->is_succeeded = true;
            $this->message      = $subscriber->full_name . ' removed.';
        }
    }
}
