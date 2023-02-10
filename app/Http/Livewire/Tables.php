<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\User;
use App\Models\UserCategory;
use Carbon\Carbon;
use Livewire\Component;

class Tables extends Component
{
    public $user;
    public $karyawan;
    public $kategori;
    public $category;
    public $userCategory;

    public function store()
    {
        $this->validate([
            'karyawan' => 'required',
            'category' => 'required'
        ]);

        UserCategory::create([
            'user_id' => $this->karyawan,
            'category_id' => $this->kategori
        ]);
        $this->resetInput();
        return redirect()->to('/tables');
    }

    public function resetInput()
    {
        $this->karyawan = null;
        $this->kategori = null;
    }

    public function mount()
    {
        $this->category = Category::all();
        $this->user = User::where('role', 'Teknisi')->get();
        $this->userCategory = User::with(['category'])->whereHas('category', function ($q) {
            $q->whereDate('user_categories.created_at', Carbon::today());
        })->get();
    }
    public function render()
    {
        return view('livewire.tables', [
            'categories' => $this->category,
            'users' => $this->user,
            'userCategories' => $this->userCategory
        ]);
    }
}
