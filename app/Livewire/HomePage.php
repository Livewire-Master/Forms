<?php

namespace App\Livewire;

use App\Livewire\Forms\NewsletterForm;
use App\Models\Newsletter;
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
     * Query to search
     *
     * @var string
     */
    public string $query = '';

    public int $counts = 0;

    public array $result = [];

    public function updatedQuery($query): void
    {
        $this->result = Newsletter
            ::where('email', 'like', "%$query%")
            ->orWhere('full_name', 'like', "%$query%")
            ->get()
            ->toArray()
        ;
    }

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
