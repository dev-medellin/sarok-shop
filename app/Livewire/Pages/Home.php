<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use App\Libraries\Templates;
use App\Models\ProductListModels;

class Home extends Component
{
    public $temp;
    public $testDatas;

    public function mount(Templates $templats){
        $this->temp = $templats->style();
        $this->testDatas = ProductListModels::get() ;
    }

    public function render()
    {
        return view('pages.home')
        ->layout('app',['data' => $this->temp]);
    }
}
