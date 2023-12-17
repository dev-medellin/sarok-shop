<?php

namespace App\Livewire\Pages\Auth;

use Livewire\Component;
use App\Libraries\Templates;
use App\Models\OrderDetails;
use Auth;

class MyAccount extends Component
{

    public $temp;
    public $track_id, $getInfoTrack = null;

    public function mount(Templates $templats){
        $this->temp = $templats->style();
        if(!Auth::check()){
            redirect('/login');
        }
    }

    public function render()
    {
        return view('pages.auth.my-account')
        ->layout('app',['data' => $this->temp]);
    }

    public function trackID(){
        $check = OrderDetails::where('order_tracker_id',$this->track_id)->get();
        if(count($check)  > 0){
            $this->getInfoTrack = $check;
        }else{
            session()->flash('error_message', 'There is no order for tracker id : '.$this->track_id.'');
        }
    }
}
