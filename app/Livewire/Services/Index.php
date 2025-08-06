<?php

namespace App\Livewire\Services;

use Livewire\Component;

class Index extends Component
{
    public string $search = '';
    
    public $count = 1;
 
    public function increment()
    {
        $this->count++;
    }
 
    public function decrement()
    {
        $this->count--;
    }

    public function render()
    {
        return view('livewire.services.index')
            ->layout('layouts.app', ['title' => 'Services']);
    }
}
