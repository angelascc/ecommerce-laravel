<div>
    <h2>{{ $title }} {{ $name }}</h2>

    <input wire:model.debounce.10ms="name" type="text">
</div>
