<?php

namespace App\Livewire;

use Livewire\Component;

class CreateSession extends Component
{
    public $isVisible = false; // Boolean property to toggle component visibility

    // Other properties and methods...

    // Method to toggle visibility
    public function toggleVisibility()
    {
        $this->isVisible = !$this->isVisible; // Toggle the boolean value
    }
    public $selectedCompany;
    public $selectedDate;
    public $selectedTiming;
    public $selectedModules;
    public $selectedTeachers;
    public $selectedRooms;
    protected $listeners = ['refreshComponent' => 'refresh'];
    public function reloadComponent()
{
    // You can perform any logic here if needed
    // For now, let's just emit a refresh event
    $this->emit('refreshComponent');
}
    public function refresh()
    {
        // You can perform any necessary updates here
        // For now, let's just rerender the component with the same data
        $this->render();
    }


    public function mount($company, $date, $timing, $modules, $teachers, $rooms){
        $this->selectedCompany = $company;
        $this->selectedDate = $date;
        $this->selectedTiming = $timing;
        $this->selectedTeachers = $teachers;
        $this->selectedModules = $modules;
        $this->selectedRooms = $rooms;
    }
    
    public function render()
    {
        return view('livewire.create-session');
    }
}
