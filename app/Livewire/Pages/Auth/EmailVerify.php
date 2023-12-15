<?php

namespace App\Livewire\Pages\Auth;

use Livewire\Component;
use App\Libraries\Templates;
use App\Models\EmailVerify as ModelsEmailVerify;

class EmailVerify extends Component
{

    public $temp;
    public $getToken;

    public function mount(Templates $templats, $token){
        $this->temp = $templats->style();
        $this->getToken = ModelsEmailVerify::checkToken($token);
        if(!$this->getToken){
           $this->redirectPageError();
        }
    }

    public function render()
    {
        if(!empty($this->getToken)){
            return view('pages.auth.email-verify')
            ->layout('app',['data' => $this->temp]);
        }else{
            $this->redirectPageError();
        }
    }

    public function redirectPageError(){
        session()->flash('message', 'Invalid Link, please register.');
        redirect('register');
    }
 
}
