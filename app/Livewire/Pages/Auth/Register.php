<?php

namespace App\Livewire\Pages\Auth;

use Livewire\Component;
use Hash;
use App\Libraries\Templates;
use App\Models\{
    Users
};

class Register extends Component
{
    public $temp;
    public $fname;
    public $lname;
    public $email;
    public $password;

    protected $messages = [
        'fname.required' => 'The First Name cannot be empty.',
        'lname.required' => 'The Last Name cannot be empty.',
        'password.required' => 'The Password cannot be empty.',
        'password.min' => 'The Password must minimum of 6.',
        'password.max' => 'The Password must maximum 6.',
        'email.required' => 'The Email Address cannot be empty.',
        'email.email' => 'The Email Address format is not valid.',
    ];

    public function mount(Templates $templats){
        $this->temp = $templats->style();
    }

    public function render()
    {
        return view('pages.auth.register')
        ->layout('app',['data' => $this->temp]);
    }
    

    public function updated($field){
        $this->validateOnly($field,[
            'fname' => 'required|string',
            'lname' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|min:6|max:12'
        ]);
    }

    public function submitRegister(){
        $this->validate([
            'fname' => 'required|string',
            'lname' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
    
        $inputs = [
            'fname' => $this->fname,
            'lname' => $this->lname,
            'email' => $this->email,
            'password' => Hash::make($this->password)
        ];
        $token_key = base64_encode($this->email);

        $created = Users::createdUser($inputs,$token_key);

        if($created) {
            session()->flash('message', 'We sent you an email to verify your account!.');
            redirect('login');
        }else{
            session()->flash('message', 'Email address already registered.');
        }
    }
}
