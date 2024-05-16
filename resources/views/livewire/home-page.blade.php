<div>
    <h1>
        Form :: Home Page
    </h1>
    <p>
        Here is your home page component
    </p>
    <hr>
    <div>
        <h2>
            Join Our Newsletter
        </h2>
        <p>
            We ensure you that we won't use your data for commercial usage.
        </p>
        <form wire:submit.prevent="joinNewsletter">
            <div>
                <label for="input-full_name">
                    Full Name <span>*</span>
                </label>
                <br>
                <input
                    wire:model.blur="form.full_name"
                    id="input-full_name"
                    name="full_name"
                    type="text"
                >
                @error('form.full_name')
                <p style="color: #ff6d6d; margin-top: 4px">
                    {{ $message }}
                </p>
                @enderror
            </div>
            <br>
            <div>
                <label for="input-email">
                    Email <span>*</span>
                </label>
                <br>
                <input
                    wire:model.blur="form.email"
                    id="input-email"
                    name="email"
                    type="text"
                >
                @error('form.email')
                <p style="color: #ff6d6d; margin-top: 4px">
                    {{ $message }}
                </p>
                @enderror
            </div>
            <br>
            <button type="submit">
                Join Newsletter
            </button>
            <button type="reset">
                Reset Data
            </button>
        </form>
        @if($is_joined)
            <p style="color: deepskyblue">
                You're joined to our newsletter service.
            </p>
        @endif
    </div>
    <hr>
    <ul>
        @foreach(\App\Models\Newsletter::all() as $newsletterUser)
            <li wire:key="newsletter-user--{{ $newsletterUser->id }}">
                {{ $newsletterUser->full_name }} : {{ $newsletterUser->email }}
            </li>
        @endforeach
    </ul>
</div>
