<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Task;

class Counter extends Component
{
    public $name = "Laravel";
    public $title;

    public function mount($title)
    {
        $this->title = $title;
    }

    public function render()
    {
        return view('livewire.counter', [
            'tasks' => Task::all()
        ]);
    }
}
