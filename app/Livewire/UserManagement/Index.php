<?php

namespace App\Livewire\UserManagement;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Index extends Component
{
    public ?Collection $users;

    public string $search = '';

    public bool $show_delete_modal = false;

    public int $user_id;

    public function showDeleteModal(){
        $this->show_delete_modal = true;
    }

    public function updatedSearch(){
        $this->users = User::search($this->search)->get();
    }

    public function showConfirmationModal($userId){
        $this->user_id = $userId;
        $this->show_delete_modal = true;
    }

    public function confirmDelete()
    {
        $user = User::find($this->user_id);

        if ($user) {
            $user->delete();
            $this->users = User::all();
            $this->show_delete_modal = false;
        }
    }

    public function mount(){
        $this->users = User::all();
    }

    public function render()
    {
        return view('livewire.user-management.index')
            ->layout('layouts.app', ['title' => 'User Management']);
    }
}
