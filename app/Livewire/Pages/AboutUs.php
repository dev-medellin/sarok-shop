<?php

namespace App\Livewire\Pages;
use App\Libraries\Templates;

use Livewire\Component;

class AboutUs extends Component
{
    public $temp;

    public function mount(Templates $templats){
        $this->temp = $templats->style();
    }

    public function render()
    {
        return view('pages.about-us')
        ->layout('app',['data' => $this->temp]);
    }
}
