<?php

namespace App\Http\Livewire\LaravelExamples;

use App\Models\User;
use Livewire\Component;

class UserManagement extends Component
{
    public $name;
    public $nik;

    public $users = [];
    public $avatar = ['../assets/img/team-1.jpg', '../assets/img/team-2.jpg', '../assets/img/team-3.jpg', '../assets/img/team-4.jpg'];

    /**
     * Store a newly created resource in storage.
     * 
     */
    public function store()
    {
        $dataValidate = $this->validate([
            'name' => 'required',
            'nik' => 'required',
        ]);
        User::create($dataValidate);
        session()->flash('message', 'User successfully created.');
        $this->resetInput();
    }

    /**
     * Reset Input
     */
    public function resetInput()
    {
        $this->name = '';
        $this->nik = '';
    }

    public function render()
    {
        $this->users = User::all()->except(auth()->user()->id);
        return view('livewire.laravel-examples.user-management', [
            'users' => $this->users,
            'avatar' => $this->avatar,
        ]);
    }
}
