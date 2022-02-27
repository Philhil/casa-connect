<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Support\Facades\Http;
use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SignUp extends Component
{
    public $first_name = '';
    public $name = '';
    public $email = '';
    public $password = '';
    public $captcha = 0;
    public $zip = 'spamprevention';
    public $street = '';

    protected $rules = [
        'first_name' => 'required|min:3',
        'name' => 'required|min:3',
        'email' => 'required|email:rfc,dns|unique:users',
        'password' => 'required|min:8',
    ];

    public function mount() {
        if(auth()->user()){
            redirect('/dashboard');
        }
    }

    public function updatedCaptcha($token)
    {
        $response = Http::post('https://www.google.com/recaptcha/api/siteverify?secret=' . env('RECAPTCHA_SECRET') . '&response=' . $token);
        $this->captcha = $response->json()['score'];

        if (!$this->captcha > .3) {
            $this->store();
        } else {
            return session()->flash('success', 'Google thinks you are a bot, please refresh and try again');
        }

    }

    public function register() {
        $this->validate();

        if ($this->zip != "spamprevention" || !empty($this->street))
        {
            return null;
        }

        $user = User::create([
            'first_name' => $this->first_name,
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password)
        ]);

        auth()->login($user);

        return redirect('/dashboard');
    }

    public function render()
    {
        return view('livewire.auth.sign-up');
    }
}
