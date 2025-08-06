<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Dashboard extends Component
{
    public int $users_count = 0;
    public int $admins = 0;
    public int $barbers = 0;
    public int $customers = 0;

    public function mount(){
        $this->users_count = User::count();
        $this->admins = User::where('role', \App\Enum\RoleEnum::ADMIN->value)->count();
        $this->barbers = User::where('role', \App\Enum\RoleEnum::BARBER->value)->count();
        $this->customers = User::where('role', \App\Enum\RoleEnum::CUSTOMER->value)->count();
    }

    public function render()
    {
        return view('livewire.dashboard')
            ->layout('layouts.app', ['title' => 'Dashboard']);
    }
}
