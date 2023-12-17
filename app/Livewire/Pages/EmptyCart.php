<?php

namespace App\Livewire\Pages;
use App\Libraries\Templates;

use Livewire\Component;

class EmptyCart extends Component
{
    public $temp;

    public function mount(Templates $templats){
        $this->temp = $templats->style();
    }

    public function render()
    {
        return view('pages.empty-cart')
        ->layout('app',['data' => $this->temp]);
    }
}
