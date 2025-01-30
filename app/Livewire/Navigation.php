<?php

namespace App\Livewire;

use Livewire\Component;

class Navigation extends Component
{
    public $trigger = false;

    public function switch() {
        if($this->trigger) {
            $this->trigger = false;
        } else {
            $this->trigger = true;
        }
    }

    public function render()
    {
        return view('layouts.navigation');
    }
}
