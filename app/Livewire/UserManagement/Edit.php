<?php

namespace App\Livewire\UserManagement;

use App\Models\User;
use Livewire\Component;

class Edit extends Component
{
    public $userId;
    public $name, $email, $password, $password_confirmation, $phone;

    public function mount($id)
    {
        $this->userId = $id;

        $user = User::findOrFail($id);
        $this->name = $user->name;
        $this->email = $user->email;
        $this->phone = $user->phone;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|min:3',
            'email' => 'required|email|unique:users,email,' . $this->userId,
            'password' => 'nullable|min:6|confirmed',
            'phone' => 'nullable|string|max:11',
        ];
    }

    public function save()
    {
        $this->validate();

        $user = User::findOrFail($this->userId);
        $user->update([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
        ]);

        return redirect()->route('user-management.index')->with('success', 'User updated successfully!');
    }

    public function render()
    {
        return view('livewire.user-management.edit')
            ->layout('layouts.app', ['title' => 'User Management']);
    }
}
