<?php

namespace App\Livewire\UserManagement;

use Livewire\Component;

class Index extends Component
{
    public string $search = '';

    public bool $show_delete_modal = false;

    public function showDeleteModal(){
        $this->show_delete_modal = true;
    }

    public function updatedSearch($keyword){
        dd($keyword);
    }

    public function render()
    {
        return view('livewire.user-management.index');
    }
}
