<div>
    @if (session()->has('message'))
        <p>{{ session('message') }}</p>
    @endif

    @foreach ($tasks as $t)
        @livewire('list-task', ['task' => $t], key($t->id))
    @endforeach

    <p>{{$name}}</p>
    <input wire:model="name" type="text">
    <button wire:click="addTask">Agregar</button>
</div>
