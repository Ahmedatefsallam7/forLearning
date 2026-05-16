<?php
namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $name = "Ahmed";
    public $mattchNameCount = 0;
    public $totalCount = 100;

    public $step = 1;

    function randAhmed(){

        $this->name = str_shuffle($this->name);
        if(str_starts_with($this->name,'A') && $this->totalCount > 0) {
            $this->totalCount--;
            $this->mattchNameCount++;
        }

    }

    public function render()
    {
        return view('livewire.counter');
    }
}
