<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\User;
use Carbon\Carbon;
use Livewire\Component;

class Karyawan extends Component
{
    public $userCategoryDay;
    public $userCategory;
    public $category;

    public $kategori;

    public function store(){
        $this->validate([
            'category' => 'required',
        ]);
        $user = User::find(auth()->user()->id);
        $user->category()->attach($this->kategori);
        $this->category = null;
        return redirect()->to('/karyawan');
    }   

    public function mount()
    {
        $this->userCategoryDay = User::with(['category'])->whereHas('category', function($q){
            $q->whereDate('user_categories.created_at', Carbon::today());
        })->find(auth()->user()->id);

        $this->userCategory = User::with(['category'])->whereHas('category', function($q){
            $q->whereBetween('user_categories.created_at', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()]);
        })->find(auth()->user()->id);

        // dd($this->userCategoryDay->category->pluck('name')->countBy(), $this->userCategory->toArray());

        $this->category = Category::all();

    }

    public function render()
    {
        return view('livewire.karyawan',[
            'userCategoriesDay' => $this->userCategoryDay,
            'userCategories' => $this->userCategory,
            'categories' => $this->category,
        ]);
    }
}
