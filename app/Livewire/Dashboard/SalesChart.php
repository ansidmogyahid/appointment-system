<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;

class SalesChart extends Component
{
    public $sales = [];

    public function mount()
    {
        // Simulated data - replace with DB call if needed
        $this->sales = [
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
            'data' => [1300, 1500, 1375, 1600, 1700, 1900],
        ];
    }

    public function render()
    {
        return view('livewire.dashboard.sales-chart');
    }
}
