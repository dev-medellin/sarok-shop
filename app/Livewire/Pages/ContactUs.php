<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use App\Libraries\Templates;

class ContactUs extends Component
{
    public $temp;

    public function mount(Templates $templats){
        $this->temp = $templats->style();
    }

    public function render()
    {
        return view('pages.contact-us')
        ->layout('app',['data' => $this->temp]);
    }
}
