<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use App\Libraries\Templates;
use App\Models\OrderDetails;

class OrderComplete extends Component
{
    public $temp;
    public $tracker_id = 0;

    public function mount(Templates $templats, $tracker_id){
        $this->temp = $templats->style();
        $check = OrderDetails::where('order_tracker_id', $tracker_id)->first();
        if($check == null){
            redirect('/login');
        }
        $this->tracker_id = $tracker_id;
    }

    public function render()
    {

        return view('pages.order-complete')
        ->layout('app',['data' => $this->temp]);

    }
}
