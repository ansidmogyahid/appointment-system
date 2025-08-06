<?php

namespace App\Livewire\Services;

use App\Models\Service;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;

    public $serviceId;
    public $name, $price, $description, $image, $existingImage;

    public function mount($id)
    {
        $service = Service::findOrFail($id);
        $this->serviceId = $service->id;
        $this->name = $service->name;
        $this->price = $service->price;
        $this->description = $service->description;
        $this->existingImage = $service->image;
    }

    protected $rules = [
        'name' => 'required|string|min:2',
        'price' => 'required|numeric',
        'description' => 'nullable|string',
        'image' => 'nullable|image|max:2048',
    ];

    public function save()
    {
        $this->validate();

        $service = Service::findOrFail($this->serviceId);

        if ($this->image) {
            $imagePath = $this->image->store('services', 'public');
        } else {
            $imagePath = $this->existingImage;
        }

        $service->update([
            'name' => $this->name,
            'price' => $this->price,
            'description' => $this->description,
            'image' => $imagePath,
        ]);

        return redirect()->route('services.index')->with('success', 'Service updated successfully!');
    }

    public function render()
    {
        return view('livewire.services.edit')
            ->layout('layouts.app', ['title' => 'Services']);
    }
}
