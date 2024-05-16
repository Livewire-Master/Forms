<?php

namespace App\Livewire;

use App\Livewire\Forms\NewsletterForm;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Forms - Home')]
class HomePage extends Component
{
    /**
     * Newsletter Form
     *
     * @var NewsletterForm
     */
    public NewsletterForm $form;

    /**
     * Join to the newsletter
     *
     * @return void
     */
    public function joinNewsletter(): void
    {
        $this->form->subscribe();
    }

    /**
     * Unsubscribe from newsletter based on user-subscription id
     *
     * @param int $id
     *
     * @return void
     */
    public function unsubscribeFromNewsletter(int $id): void
    {
        $this->form->unsubscribe($id);
    }
}
