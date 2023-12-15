<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use App\Libraries\Templates;

class Home extends Component
{
    public $temp;

    public function mount(Templates $templats){
        $this->temp = $templats->style();
    }

    public function render()
    {
        return view('pages.home')
        ->layout('app',['data' => $this->temp]);
    }
}
