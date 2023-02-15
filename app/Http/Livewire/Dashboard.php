<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\UserCategory;
use Carbon\Carbon;
use Livewire\Component;

class Dashboard extends Component
{
    public $user;
    public $userCategoryDay;
    public $userCategory;
    public $notApproved;

    public function mount()
    {
        $this->userCategoryDay = User::with(['category' => function ($q) {
            $q->where('user_categories.is_approved', true);
        }])->whereHas('category', function ($q) {
            $q->whereDate('user_categories.created_at', Carbon::today());
        })->get();

        $this->user = User::all();

        $this->userCategory = User::with(['category' => function ($q) {
            $q->where('user_categories.is_approved', true);
        }])->whereHas('category', function ($q) {
            $q->whereBetween('user_categories.created_at', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()]);
        })->get();

        $this->notApproved = User::with(['category' => function ($q) {
            $q->where('user_categories.is_approved', false);
        }])->whereHas('category', function ($q) {
            $q->whereDate('user_categories.created_at', Carbon::today());
            $q->where('user_categories.is_approved', false);
        })->get();
    }

    public function approved($id)
    {
        $userCategory = UserCategory::find($id);
        $userCategory->is_approved = true;
        $userCategory->save();
        session()->flash('success', 'Laporan sudah berhasil di Approve.');
        return redirect()->to('/dashboard');
    }

    public function destroy($id)
    {
        $userCategory = UserCategory::find($id);
        $userCategory->delete();
        session()->flash('success', 'Laporan sudah berhasil ditolak.');
        return redirect()->to('/dashboard');
    }

    public function render()
    {
        return view('livewire.dashboard', [
            'users' => $this->user,
            'userCategoriesDay' => $this->userCategoryDay,
            'userCategories' => $this->userCategory,
            'notApproved' => $this->notApproved,
        ]);
    }
}
