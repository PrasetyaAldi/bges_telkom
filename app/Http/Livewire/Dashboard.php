<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\UserCategory;
use Carbon\Carbon;
use Livewire\Component;
use PDF;

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

    public function converToPDF()
    {
        $this->userCategory = User::with(['category' => function ($q) {
            $q->where('user_categories.is_approved', true);
        }])->whereHas('category', function ($q) {
            $q->whereBetween('user_categories.created_at', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()]);
        })->get();
        return redirect()->to('/pdf-generator');

        // $pdf = PDF::loadView('livewire.pdf', [
        //     'userCategories' => $this->userCategory,
        //     'startMonth' =>  Carbon::now()->startOfMonth()->format('d M Y'),
        //     'endMonth' => Carbon::now()->endOfMonth()->format('d M Y'),
        // ])->setpaper('a4', 'landscape');
        // return $pdf->download('upload.pdf');
    }

    public function render()
    {
        return view('livewire.dashboard', [
            'users' => $this->user,
            'userCategoriesDay' => $this->userCategoryDay,
            'userCategories' => $this->userCategory,
            'notApproved' => $this->notApproved,
            'today' => Carbon::today()->format('d M Y'),
            'startMonth' =>  Carbon::now()->startOfMonth()->format('d M Y'),
            'endMonth' => Carbon::now()->endOfMonth()->format('d M Y'),
        ]);
    }
}
