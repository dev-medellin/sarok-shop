<?php

namespace App\Livewire\Pages\Auth;

use Livewire\Component;
use App\Libraries\Templates;
use App\Models\EmailVerify;
use Auth;

class Login extends Component
{
    public $temp;
    public $email;
    public $password;

    public function mount(Templates $templats){
        $this->temp = $templats->style();
        if(Auth::check()){
            redirect('/');
        }
    }

    public function render()
    {
        return view('pages.auth.login')
        ->layout('app',['data' => $this->temp]);
    }

    public function login()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $checkVerify = EmailVerify::checkStatus($this->email);
        if($checkVerify['status'] == 'verify'){
            if(\Auth::attempt(array('email' => $this->email, 'password' => $this->password))){
                session()->flash('message', "You are Login successful.");
                redirect('/');
            }else{
                session()->flash('error', 'email and password are wrong.');
            }
        }else{
            session()->flash('error', $checkVerify['message']);
        }
    }

    public function logout () {
        //logout user
        auth()->logout();
        // redirect to homepage
        return redirect('/');
    }
}
