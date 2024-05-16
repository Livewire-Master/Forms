@props(
    [
        'key',
        'label',
        'model',
        'type' => 'text',
        'is_required' => false,
    ]
)

<div>
    <label for="input-{{ $key }}">
        {{ $label }}
        @if($is_required)
            <span>*</span>
        @endif
    </label>
    <br>
    <input
        wire:model="{{ $model }}"
        id="input-{{ $key }}"
        name="{{ $key }}"
        type="{{ $type }}"
        @if($is_required)
            required
        @endif
    >
    @error($model)
    <p style="color: #ff6d6d; margin-top: 4px">
        {{ $message }}
    </p>
    @enderror
</div>
