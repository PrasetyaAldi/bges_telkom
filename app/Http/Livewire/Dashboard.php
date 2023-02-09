<?php

namespace App\Http\Livewire;

use App\Models\User;
use Carbon\Carbon;
use Livewire\Component;

class Dashboard extends Component
{
    public $user;
    public $userCategoryDay;
    public $userCategory;

    public function mount()
    {
        $this->userCategoryDay = User::with(['category'])->whereHas('category', function($q){
            $q->whereDate('user_categories.created_at', Carbon::today());
        })->get();
        $this->user = User::all();
        $this->userCategory = User::with(['category'])->whereHas('category', function($q){
            $q->whereBetween('user_categories.created_at', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()]);
        })->get();

    }

    public function render()
    {
        return view('livewire.dashboard', [
            'users' => $this->user,
            'userCategoriesDay' => $this->userCategoryDay,
            'userCategories' => $this->userCategory,
        ]);
    }
}
