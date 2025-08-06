<?php

namespace App\Livewire\Services;

use App\Models\Service;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $name, $price, $description, $image;

    protected $rules = [
        'name' => 'required|string|min:2',
        'price' => 'required|numeric',
        'description' => 'nullable|string',
        'image' => 'nullable|image|max:2048', // 2MB Max
    ];

    public function save()
    {
        $this->validate();

        $imagePath = $this->image ? $this->image->store('services', 'public') : null;

        Service::create([
            'name' => $this->name,
            'price' => $this->price,
            'description' => $this->description,
            'image' => $imagePath,
        ]);

        return redirect()->route('services.index')->with('success', 'Service added successfully!');
    }

    public function render()
    {
        return view('livewire.services.create')
            ->layout('layouts.app', ['title' => 'Services']);
    }
}
