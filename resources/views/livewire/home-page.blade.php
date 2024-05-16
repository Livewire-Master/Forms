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
                    wire:model
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
                    wire:model
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
            <button wire:loading.remove wire:target="joinNewsletter" type="submit">
                Join Newsletter
            </button>
            <button wire:loading.remove wire:target="joinNewsletter" type="reset">
                Reset Data
            </button>

            <div wire:loading.flex wire:target="joinNewsletter" style="align-items: center; gap: 8px">
                <svg
                    width="36"
                    height="36"
                    fill="#fff"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <style>.spinner_z9k8 {
                            transform-origin: center;
                            animation: spinner_StKS .75s infinite linear
                        }

                        @keyframes spinner_StKS {
                            100% {
                                transform: rotate(360deg)
                            }
                        }</style>
                    <path d="M12,1A11,11,0,1,0,23,12,11,11,0,0,0,12,1Zm0,19a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z"
                          opacity=".25"/>
                    <path
                        d="M12,4a8,8,0,0,1,7.89,6.7A1.53,1.53,0,0,0,21.38,12h0a1.5,1.5,0,0,0,1.48-1.75,11,11,0,0,0-21.72,0A1.5,1.5,0,0,0,2.62,12h0a1.53,1.53,0,0,0,1.49-1.3A8,8,0,0,1,12,4Z"
                        class="spinner_z9k8"/>
                </svg>
                <p>
                    Processing your request
                </p>
            </div>
        </form>
        @if($form->is_succeeded)
            <p style="color: deepskyblue">
                {{ $form->message }}
            </p>
        @endif
    </div>
    <hr>
    <ul>
        @foreach(\App\Models\Newsletter::all() as $subscriber)
            <li wire:key="newsletter-user--{{ $subscriber->id }}">
                {{ $subscriber->full_name }} : {{ $subscriber->email }}
                <button wire:click="unsubscribeFromNewsletter({{ $subscriber->id }})">
                    Unsubscribe
                </button>
            </li>
        @endforeach
    </ul>
</div>
