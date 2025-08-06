<?php

namespace App\Livewire\Services;

use App\Models\Service;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Index extends Component
{
    public ?Collection $services;

    public string $search = '';

    public bool $show_delete_modal = false;

    public int $service_id;

    public function showDeleteModal(){
        $this->show_delete_modal = true;
    }

    public function updatedSearch(){
        $this->services = Service::search($this->search)->get();
    }

    public function showConfirmationModal($serviceId){
        $this->service_id = $serviceId;
        $this->show_delete_modal = true;
    }

    public function confirmDelete()
    {
        $user = Service::find($this->service_id);

        if ($user) {
            $user->delete();
            $this->services = Service::all();
            $this->show_delete_modal = false;
        }
    }

    public function mount(){
        $this->services = Service::all();
    }

    public function render()
    {
        return view('livewire.services.index')
            ->layout('layouts.app', ['title' => 'Services']);
    }
}
