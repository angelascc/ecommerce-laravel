<div>
    <h2>{{ $title }} {{ $name }}</h2>

    @foreach ($tasks as $t)
        <div>
            <p>{{ $t->name }}</p>
        </div>
    @endforeach

    <input wire:model.debounce.10ms="name" type="text">
</div>
