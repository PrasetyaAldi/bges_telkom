<?php

namespace App\Http\Livewire\LaravelExamples;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class UserManagement extends Component
{
    public $name;
    public $nik;
    public $role;

    public $confirmModal = false;

    public $users = [];
    public $avatar;

    /**
     * Store a newly created resource in storage.
     * 
     */
    public function store()
    {
        $this->validate([
            'name' => 'required',
            'nik' => 'required|unique:users,nik',
        ]);

        User::create([
            'name' => $this->name,
            'nik' => $this->nik,
            'password' => Hash::make($this->nik),
            'role' => $this->role,
        ]);
        session()->flash('message', 'User successfully created.');
        $this->resetInput();
        return redirect()->to('/user-management');
    }

    public function destroy($user_id)
    {
        $user = User::find($user_id);
        $user->delete();
        session()->flash('message', 'User successfully deleted.');
        return redirect()->to('/user-management');
    }

    public function showModal()
    {
        $this->confirmModal = true;
    }

    public function mount()
    {
        $this->avatar = ['../assets/img/team-1.jpg', '../assets/img/team-2.jpg', '../assets/img/team-3.jpg', '../assets/img/team-4.jpg'];
        $this->users = User::all();
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
        return view('livewire.laravel-examples.user-management', [
            'users' => $this->users,
            'avatar' => $this->avatar,
        ]);
    }
}
