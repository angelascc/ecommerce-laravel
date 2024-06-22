<div>
    @foreach ($tasks as $t)
        <div>
            <p>{{ $t->name }}</p>
        </div>
    @endforeach

    <p>{{$name}}</p>
    <input wire:model="name" type="text">
    <button wire:click="addTask">Agregar</button>
</div>
