<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Task;

class Counter extends Component
{
    public $name;
    public $title;

    public function mount($title)
    {
        $this->title = $title;
    }

    public function addTask()
    {
        Task::create(['name' => $this->name]);
        $this->name = "";
    }

    public function render()
    {
        return view('livewire.counter', [
            'tasks' => Task::all()
        ]);
    }
}
