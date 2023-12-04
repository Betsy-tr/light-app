<?php

namespace App\Livewire;

use Livewire\Component;

class Light extends Component
{
    public $brightness = 10;

    //Cette fonction permet d'éteindre l'ampoule
    public function off(){
        
        $this->brightness = 0;
    }

    //Cette fonction permet d'allumée l'ampoule
    public function allumee(){

        $this->brightness = 100;
    }

    //Cette fonction permet d'augmenter l'ampoule de 10%
    public function increment(){

        $this->brightness = min(100, $this->brightness + 10 );
        
    }

    //Cette fonction permet de diminuer l'ampoule de 10%
    public function decrement(){

        $this->brightness = max(0, $this->brightness - 10 );
 
    }

    public function render()
    {
        return view('livewire.light');
    }
}
