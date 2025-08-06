<?php

namespace App\Livewire\UserManagement;

use App\Models\User;
use Livewire\Component;

class Create extends Component
{
    public $name, $email, $password, $password_confirmation, $phone;

    protected $rules = [
        'name' => 'required|string|min:3',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6|confirmed',
        'phone' => 'nullable|string|max:20',
    ];

    public function save()
    {
        $this->validate();

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
            'phone' => $this->phone,
        ]);

        return redirect()->route('user-management.index')->with('success', 'User added successfully!');
    }

    public function resetForm()
    {
        $this->reset(['name', 'email', 'password', 'password_confirmation', 'phone']);
    }

    public function render()
    {
        return view('livewire.user-management.create')
            ->layout('layouts.app', ['title' => 'User Management']);
    }
}
