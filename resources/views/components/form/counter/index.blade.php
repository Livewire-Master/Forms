<div x-data="{ qty: 0 }" x-modelable="qty" {{ $attributes }}>
    <button @click="qty++">+</button>
    <span x-text="qty"></span>
    <button @click="qty--">-</button>
</div>
