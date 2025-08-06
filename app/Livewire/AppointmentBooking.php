<?php

namespace App\Livewire;

use App\Models\Service;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class AppointmentBooking extends Component
{
    public ?Collection $barbers;
    public ?Collection $services;

    public function save(){
        dd("Booking appointment available soon...");
    }

    public function mount(){
        $this->barbers = User::where('role', \App\Enum\RoleEnum::BARBER->value)->get();
        $this->services = Service::all();
    }

    public function render()
    {
        return view('livewire.appointment-booking')
            ->layout('layouts.appointment');
    }
}
