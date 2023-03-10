<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use App\Models\User;

class Login extends Component
{
    public $nik = '';
    public $password = '';
    public $remember_me = false;

    protected $rules = [
        'nik' => 'required',
        'password' => 'required',
    ];

    public function login()
    {
        if (auth()->attempt(['nik' => $this->nik, 'password' => $this->password], $this->remember_me)) {
            $user = User::where(["nik" => $this->nik])->first();
            auth()->login($user, $this->remember_me);
            if ($user->role !== 'Teknisi')
                return redirect()->intended('/dashboard');
            else
                return redirect()->intended('/karyawan');
        } else {
            return $this->addError('nik', trans('auth.failed'));
        }
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
