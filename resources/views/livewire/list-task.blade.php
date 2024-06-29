<div>
    <p>{{ $task->name }}</p>
    <button wire:click="$emitUp('deleteTask', {{ $task->id }})">Eliminar</button>
</div>
