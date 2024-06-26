<div>
    @if (session()->has('message'))
        <p>{{ session('message') }}</p>
    @endif

    @foreach ($tasks as $t)
        <div>
            <p>{{ $t->name }}</p>
            <button wire:click="deleteTask({{ $t->id }})">Eliminar</button>
        </div>
    @endforeach

    <p>{{$name}}</p>
    <input wire:model="name" type="text">
    <button wire:click="addTask">Agregar</button>
</div>
