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
                wire:model="full_name"
                id="input-full_name"
                name="full_name"
                type="text"
            >
            @error('full_name')
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
                wire:model="email"
                id="input-email"
                name="email"
                type="text"
            >
        </div>
        <br>
        <button type="submit">
            Join Newsletter
        </button>
        <button type="reset">
            Reset Data
        </button>
    </form>
</div>
